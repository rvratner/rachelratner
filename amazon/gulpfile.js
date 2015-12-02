'use strict';

var gulp       = require('gulp');
var $          = require('gulp-load-plugins')();
var sync       = $.sync(gulp).sync;
var del        = require('del');
var browserify = require('browserify');
var watchify   = require('watchify');
var source     = require('vinyl-source-stream');
var buffer     = require('vinyl-buffer');
var path       = require('path');
var replace    = require('gulp-replace');
var async      = require('async');
var useref     = require('node-useref');


var APP_FILENAME = 'app.js';
var APP_FILENAME_MIN = APP_FILENAME.replace(/js$/, 'min.js');
var SCRIPT_OUTPUT_DIR = 'dist/scripts';
var NOOP = function(){};

require('harmonize')();

// Attach some convenience functions to $.util
$.util.error = function() {
  $.util.log($.util.colors.red.apply(null, arguments));
}
$.util.success = function() {
  $.util.log($.util.colors.green.apply(null, arguments));
}

var bundler = {

  bundles: [{
    fileName: APP_FILENAME,
    entry: './app/scripts/' + APP_FILENAME,
    useStrict: true,
    verbose: true // log updates to files and browserify events
  }],

  init: function() {

    this.bundles.map(function(bundle) {
      bundle.browserifyResult = browserify({
        entries: [bundle.entry], // Assuming there is only 1 entry
        insertGlobals: true,
        cache: {},
        packageCache: {},
        plugin: [watchify],
        transform: [
            ["babelify", {
               loose: ["es6.modules"]
            }]
        ]
      });

      if (bundle.verbose) {
        // Emits messages when packages are resolved.
        bundle.browserifyResult.on('package', function(pkg) {
          // Note: you can also listen for individual "file" events too but that
          // becomes quite verbose.
          var msg = '[' + bundle.fileName + '] Resolving package ' + pkg.name + (pkg.version ? '@' + pkg.version : "");
          $.util.log($.util.colors.gray(msg));
        });

        // Emit messages when output files are updated.
        bundle.browserifyResult.on('update', function(ids) {
          ids.map(function(id) {
            $.util.log('[' + bundle.fileName + '] File update:', id);
          });
        });
      }

      // Always emit "X bytes written (N seconds)" messages.
      bundle.browserifyResult.on('log', $.util.log.bind($.util, '[' + bundle.fileName + ']'));
    });
  },

  bundleItem: function(item, moduleIds, callback) {
    // Pipe the browserified code to dist/scripts/{fileName}.js and then (in
    // the same stream) pipe *that* to Uglify and
    // dist/scripts/{fileName}.min.js.

    callback = callback || NOOP;
    return item && item.browserifyResult.bundle()
      .on('error', $.util.log.bind($.util, 'Browserify Error'))
      .pipe(source(item.fileName))
      .pipe(item.useStrict === false ? replace(/['"]use strict['"];?/g, '') : $.util.noop())
      // Write the unminified version
      .pipe(gulp.dest(SCRIPT_OUTPUT_DIR))
      .pipe(buffer()) // Uglify can't process a stream. This collects everything into a buffer.
      .pipe($.uglify())
      .pipe($.rename({extname: '.min.js'}))
      // Write the minified version with the renamed file name
      .pipe(gulp.dest(SCRIPT_OUTPUT_DIR))
      .on('end', callback);
  },

  watch: function() {
    this.bundles.map((function(item) {
      item.browserifyResult && item.browserifyResult.on('update', this.bundleItem.bind(this, item));
    }).bind(this));
  },

  stop: function() {
    this.bundles.map(function(item) {
      item.browserifyResult && item.browserifyResult.close();
    });
  }
};

gulp.task('styles', function() {
  return gulp.src('app/styles/main.scss')
    .pipe($.sass({
      outputStyle: 'expanded', // nested, expanded, compact, compressed
      precision: 10,
      includePaths: ['app/bower_components']
    }))
    .on('error', $.util.log.bind($.util, 'Sass Error'))
    .pipe($.autoprefixer('last 1 version'))
    .pipe(gulp.dest('dist/styles'))
    .pipe($.size());
});

gulp.task('scripts', function(callback) {
  // Since this task requires a callback Gulp treats it as asynchronous
  bundler.init();
  async.parallel(
    bundler.bundles.map(function(item) {
      // async.parallel expects an array of functions that themselves accept
      // a single callback function. So for each item, return the bundleItem
      // function with the first two args bound. The third arg, "callback"
      // can now be used by async.parallel.
      return bundler.bundleItem.bind(this, item, null)
    }),
    function(error, results) {
      // Invoke the master callback when both are done.
      $.util.success('Finished bundling app and shipped-page');
      callback(error, results);
  });
});

gulp.task('html', function() {
  var assets = $.useref.assets();
  return gulp.src('app/*.html')
    .pipe(assets)
    .pipe(assets.restore())
    .pipe($.useref())
    .pipe(gulp.dest('dist'))
    .pipe($.size());
});

gulp.task('images', function() {
  return gulp.src('app/images/**/*')
    .pipe(gulp.dest('dist/images'))
    .pipe($.size());
});


gulp.task('serve', function() {
  gulp.src('dist')
    .pipe($.webserver({
      livereload: true,
      port: 8700,
      host: 'localhost'
    }));
});

gulp.task('minify:css', function() {
  return gulp.src('dist/styles/*.css')
    .pipe($.minifyCss())
    .pipe(gulp.dest('dist/styles'))
    .pipe($.size());
});

gulp.task('report', function() {
  return gulp.src('./dist/**')
    .pipe($.sizereport({
      gzip: true
    }))
});


gulp.task('clean', del.bind(null, 'dist'));

gulp.task('bundle', ['html', 'styles', 'scripts', 'images']);

gulp.task('clean-bundle', sync(['clean', 'bundle', 'report']));

gulp.task('build', ['clean-bundle'], bundler.stop.bind(bundler));

gulp.task('default', ['build']);

gulp.task('watch', sync(['clean-bundle', 'serve']), function() {
  bundler.watch();
  gulp.watch('app/*.html', ['html']);
  gulp.watch('app/styles/**/*.scss', ['styles']);
  gulp.watch('app/images/**/*', ['images']);
});
