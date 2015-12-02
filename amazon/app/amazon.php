<?php
/*
Template Name: Amazon
*/

get_header(); ?>
<style>
html, body {
	height: 100%;
	width: 100%;
	background-color: #368b8b;
	font-size: 100%;
	color: white;
	overflow: hidden;
}
body {
	font-size: 100%;
	line-height: 1.6875;
	/*margin:0;height:100%;width:100%;overflow:hidden;display:-webkit-box;display:-moz-box;display:-ms-box;display:box;-webkit-box-align:center;-moz-box-align:center;-ms-box-align:center;box-align:center;-webkit-box-pack:center;-moz-box-pack:center;-ms-box-pack:center;box-pack:center*/
/*	font-size: 1vw;
*/}
a {
	-webkit-tap-highlight-color: transparent;
}
/*h1 {
	font-size: 3vw;
}
h2 {
	color: white;
	font-size: 2vw;
}*/
.main .logo-head {
	width: 100%;
	height: 4.5rem;
}
.logo-head {
	height: 2.7rem;
}
.slide {
	opacity: 0;
	margin-top: 30px;
	text-align: center;
	height: 100%;
	width: 100%;
	-webkit-transition: opacity 150ms;
	position: absolute;
	top: 0;
	z-index: 0;
}
.slide.cur {
	opacity: 1;
	z-index: 1;
	-webkit-transition: opacity 150ms;
}
.container {
	height: 90%;
	width: 85%;
	max-width: 85%;
	margin-top: 5%;
	-webkit-box-sizing: border-box;
}
.container .main-header {
	display:none;
}
.col {
	width: 48%;
	float: left;
	margin-right: 2%;
}
/*.col {display:-webkit-box;display:-moz-box;display:-ms-box;display:box;-webkit-box-align:center;-moz-box-align:center;-ms-box-align:center;box-align:center;height:100%}*/

.main .col.right {
	padding-top:0;
}
.col:last-child {
	margin-right: 0;
}
p, ul, li, a {
	text-align: left;
	text-transform: uppercase;
}
h1,h2,h3 {
	color: white;
}
h1 {
	text-align: center;
}
ul {
	list-style-type:none;
	margin: 0;
	margin-bottom: 0;
}
li {
	margin-bottom: 10px;
	line-height: 1.3rem;
	list-style-type:none;
}
.header, .subheader {
	color: white;
	text-align: left;
	letter-spacing: 0px;
}
.header {
	font-weight: bold;
	font-size: 2.5rem;
	line-height: 0.5rem;
}
.subheader {
	font-weight: lighter;
	font-size: 1.4rem;
}
img {
	max-width: 100%;
	width: 100%;
}
h2 span {
	opacity: 0.6;
}
a {
	color: #ffc1c7;
}
h1 span {
	font-weight: lighter;
}
.next {
	right: -4rem;
}
.prev {
	left: -4rem;

}
.left img {
	max-height:75%;
	width: auto;
}
.button, .button:active, .button:visited, .button:hover {
	background: none;
	top: 0;
	bottom: 0;
	margin: auto;
	height: 20px;
	border: none;
	font-size: 50px;
	position: absolute;
	color: white;
}
.middle {
	text-align: center;
/*	margin-top:50%;
*/}
br.mobile {
	display:none;
}
.center {
	margin: auto;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	position: absolute;
	width: 300px;
}
footer {
	display: none;
}
.amazon-footer {
	font-size: 1rem;
	position: absolute;
	bottom:1%;
	left: 0;
	margin-left: 10%;
	text-transform: uppercase;
}
.larger {
	font-size: 1.5rem;
}


@media only screen and (max-width: 1024px) {
	li,a {
		font-size: 0.8rem;
		line-height:1.2rem;
	}
	img {
		text-align: left;
	}
	.slide {
		text-align: left;
	}
}  

@media screen and (max-width: 768px) {
/*	body, html {
		overflow: visible;
	}*/
	br.mobile {
		display:block;
	}
	.mobile-hide {
		display: none;
	}
	.header {
		line-height: 1.5rem;
	}
	.col {
		width: 100%;
		margin:0;
	}
	.left {
		height: 40%;
	}
	.left img {
		max-height: 100%;
	}
	.logo-head {
		height:3.5rem;
	}
	.next {
		right: -3rem;
	}
	.prev {
		left: -3rem;

	}
	h1.header {
		font-size: 1.5rem;
	}
	.subheader {
		font-size: 1rem;
		margin: 0;
		line-height: 0.5;
	}
	.amazon-footer {
		font-size: 0.8rem;
		line-height: 1rem;
	}
	.button, .button:active, .button:visited, .button:hover {
		font-size: 1.5rem;
	}
	.slide {
		margin-top: 0;
	}
	ul {
		margin-left:0;
	}
	li, a, p {
		margin-bottom: 5px;
		line-height: 1rem;
		font-size: 0.9rem;
	}
/*	.amazon-footer {
		position: relative;
	}*/
}


@media screen and (max-width: 480px) {
	.left {
		max-height: 30%;
	}
	li {
		font-size: 0.8rem;
	}
	.next {
		right: -2rem;
	}
	.prev {
		left: -2rem;

	}
	.larger {
		font-size: 0.8rem;
	}
}

@media screen and (orientation: portrait ){
	.col.right {
		padding-top: 3%
	}
}
</style>

<!-- INTRO -->
<div class = "slide cur main">
	<div class = "logo-head">
		<h1 class = "header">Rachel Ratner</h1><h2 class = "subheader"> Design Technologist</h2>
	</div>
	<div class = "col left">
		<img src="http://www.rachelratner.com/wp-content/themes/workality/img/premium.png">
	</div>
	<div class = "col right">
		<img class="mobile-hide" src="http://www.rachelratner.com/wp-content/themes/workality/img/chopsuey1.png">
	</div>
</div>

<!-- BACKGROUND  -->
<div class = "slide">
	<div class = "logo-head middle">
		<h1 class = "">Background</h1>
	</div>
</div>

<!-- KEXP -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">KEXP</h1>
	</div>
	<div class = "col left">
		<a href="http://www.kexp.org" target="_blank"><img src ="http://www.rachelratner.com/wp-content/themes/workality/img/kexp.png" /></a>
	</div>
	<div class = "col right">
		<ul>
			<li>Marketing Manager &amp; DJ</li>
			<li>Updated Website content</li>
			<li>Oversaw design team</li>
			<li>Learned Wordpress, HTML and Advertising basics</li>
			<li>Increased online social media engagement by 300%</li>
		</ul>
	</div>
</div>

<!-- SEATTLE BAND MAP -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Seattle Band<br class="mobile"> Map</h1>
	</div>
	<div class = "col left">
		<a href="http://www.seattlebandmap.com" target="_blank"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/NirvanaMap.jpg"/></a>
	</div>
	<div class = "col right">
		<ul>
			<li>Music history art project<span class="mobile-hide"> &amp; crowd-sourced website</span></li>
			<li>Learned CSS, PHP and SQL</li>
			<li>Published in <a href="http://www.wired.com/underwire/2011/03/seattle-band-map/">Wired Magazine</a>, <span class="mobile-hide">Displaid at Nordstroms, EMP, Sea-Tac Airport</span></li>
			<li>Spoke at <a href="http://www.seattlebandmap.com/blog/2011/09/21/uk-adventures/">Connected Communities Conference</a> in Northampton, UK</li>
			<li>Since 2011, Number of bands increased from 300 to 5228, +20 each week</li>
		</ul>	
	</div>
</div>

<!-- SEATTLE CENTRAL COMMUNITY COLLEGE -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Seattle Central</h1>
	</div>
	<div class = "col left">
		<a href="http://www.2020cycle.com/" target="_blank"><img  src="http://www.rachelratner.com/wp-content/themes/workality/img/2020.png" /></a>
	</div>
	<div class = "col right">
		<ul>
			<li>Seattle Central Web Development Program</li>
			<li>Learned Responsive design</li>
			<li>Programming Principles</li>
			<li>Database Management</li>
			<li>HTML, CSS, JavaScript</li>
			<li>Built responsive website for 2020 Cycles</li>
		</ul>
	</div>
</div>

<!-- EXPERIENCE  -->
<div class = "slide">
	<div class = "logo-head middle">
		<h1 class = "header ">Experience</h1>
	</div>
</div>

<!-- BKWLD -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">BKWLD</h1>
	</div>
	<div class = "col left">
		<a href="http://www.cupcakevineyards.com/" target="_blank"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/cupcake.png"  /></a>
	</div>
	<div class = "col right">
		<ul>
			<li>Agency Experience</li>
			<li>3 month internship became full time employment</li>
			<li>Corona, Intel, DXM </li>
			<li>Highly responsive, cross browser development</li>
			<li>Backbone.js, PHP, Facebook &amp; Twitter API's</li>
		</ul>
	</div>
</div>
<!-- BKWLD -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">BKWLD: <span>Intel</span></h1>
	</div>
	<div class = "col left">
		<a href="http://intel.tumblr.com/mycomputerssoold" target="_blank"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/intel.png"  /></a>
	</div>
	<div class = "col right">
		<ul>
			<li>Engage users with meme creation and social sharing</li>
			<li>Backwards compatible to IE7</li>
			<li>Using Tumblr Platform</li>
			<li>Simplified social sharing</li>
		</ul>
	</div>
</div>
<!-- POKEMON -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Pokémon</h1>
	</div>
	<div class = "col left">
		<img src="http://www.rachelratner.com/wp-content/themes/workality/img/pokemon.png" /><br>
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong>Description:</strong> </span>Contracted with <a href="http://plexipixel.com/">Plexipixel</a> to build a localized animation-heavy site based on story boards</li>
			<li><span class="mobile-hide"><strong>Technology:</strong> </span>HTML5, CSS3, SASS, JavaScript</li>
			<li><span class="mobile-hide"><strong>Rigid CMS Templates:</strong> </span>Relayout page elements with CSS and JavaScript</li>
			<li><span class="mobile-hide"><strong>Backwards Compatibility:</strong> and </span>graceful degredation</li>
			<li><span class="mobile-hide"><strong>Improved Latency:</strong> </span>Decreased load time by 12%</li>
		</ul>
	</div>
</div>

<!-- THE SPRING DISTRICT -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">The Spring District</h1>
	</div>
	<div class = "col left">
		<a href="http://thespringdistrict.com/" target="_blank"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/spring.png" /></a><br>
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong>Technology:</strong></span> HTML5, CSS3, JavaScript, Adobe Edge Framework</li>
			<li><span class="mobile-hide"><strong>Valid Code:</strong> </span>Switch from Adobe Edge to valid HTML, CSS and JavaScript</li>
			<li><span class="mobile-hide"><strong>Improved Latency:</strong> </span>Reduced number of server requests by 50%, reduced load time by 75%</li>
		</ul>
	</div>
</div>

<!-- CHOP SUEY -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Chop Suey</h1>
	</div>
	<div class = "col left">
		<a href="http://www.chopsuey.com" target="_blank"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/chopsuey.png"  /></a><br>
	</div>
	<div class = "col right">
		<p><span class="mobile-hide"><strong>Description</strong>: </span>Worked with local designer to customize a Wordpress template for local music venue</p>
	</div>
</div>

<!-- CHOP SUEY CONT. -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Chop Suey <span>cont</span></h1>
	</div>
	<div class = "col left">
		<a href="https://web.archive.org/web/20120919014312/http://www.chopsuey.com/index.html"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/chopold.png"  /></a>
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong>Goals:</strong> </span>Faster load time, easier staff updates, more visible calendar &amp; ticket sales</li>
			<li><span class="mobile-hide"><strong>Technology:</strong> </span>Wordpress, HTML, CSS, JavaScript</li>
			<li><span class="mobile-hide"><strong>Options:</strong> </span>Semi Custom and Custom Builds</li>
		</ul>
	</div>
</div>

<!-- CHOP SUEY CONT(2) -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Chop Suey<span> cont</span></h1>
	</div>
	<div class = "col left">
		<img src="http://www.rachelratner.com/wp-content/themes/workality/img/chopnew.png" />
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong></span>Under Budget:</strong> Utilized an Events Calendar plug-in</li>
			<li><span class="mobile-hide"><strong></span>Training and Follow up</strong></li>
			<li><span class="mobile-hide"><strong></span>Improved Latency:</strong> Server requests decreased by 20%. Reduced load time by 30%. </li>
			<li><span class="mobile-hide"><strong></span>Improved User Experience:</strong>positive feedback and more online ticket sales</li>
		</ul>
	</div>
</div>

<!-- KLCD-->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Kindle Landing Pages</h1>
	</div>
	<div class = "col left">
		<a href="http://ksomedia.s3.amazonaws.com/lcdtest/ratnerr/ColdGear/index.html#?device=otter&orient=landscape"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/under.png"  /></a><br>
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong>Technology:</strong> </span>HTML5, CSS3, Javascript, KLCD Framework</li>
			<li><span class="mobile-hide"><strong>Custom &amp; Semi-Custom:</strong> </span>Crayola, Kingston MobileLite, Black &amp; Decker, and ColdGear</li>
			<li><span class="mobile-hide"><strong>Templates:</strong> </span>Recipe, Interactive Product Slideshow, Image with Video CTA Hotspot, Auto Showroom, Product Family Slideshow, Premium Inventory</li>
		</ul>
	</div>
</div>

<!-- KLCD CONT -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Kindle Landing Pages<span> cont</span></h1>
	</div>
	<div class = "col left">
		<a href="http://ksomedia.s3.amazonaws.com/lcdtest/ratnerr/KLCD-Interproduct-slideshow/dummy_interslideshow.html#?device=otter&orient=landscape"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/interproduct.png"  /></a><br>
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong>Reduced K-weights:</strong> </span>Image compression / .webp</li>
			<li><span class="mobile-hide"><strong>Problem Solving:</strong> </span>Gen 5 and Gen 6 troubleshooting</li>
			<li><span class="mobile-hide"><strong>SASS:</strong> </span>Lead a SASS training with the goal of converting KCLD templates to SASS in future builds.</li>
			<li><span class="mobile-hide"><strong>Version tracking:</strong> </span>Imported templates into git repository, modeled a git workflow</li>
		</ul>
	</div>
</div>

<!-- MOBILE INTERSTITIAL -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Mobile Interstitials</h1>
	</div>
	<div class = "col left">
		<a href="http://ksomedia.s3.amazonaws.com/lcdtest/ratnerr/interstitials/fullscreen/fullscreen_v2.html"><img src="http://www.rachelratner.com/wp-content/themes/workality/img/interstitial.png" /></a>
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong>Project Overview:</strong> </span> Worked with Designers to build 5 templates </li>
			<li><span class="mobile-hide"><strong>Technology:</strong> </span> HTML5, SASS, Javascript, Shazam, Handlebars.js</li>
			<li><span class="mobile-hide"><strong>300x250:</strong> </span> Modified and tested 300x250 template</li>
			<li><span class="mobile-hide"><strong>Fullscreen:</strong> </span> Based on IAB Mobile Rising Stars </li>
			<li><span class="mobile-hide"><strong>App Download:</strong> </span> Grunt/SASS and AUI as a model for future interstitials.</li>
		</ul>
	</div>
</div>

<!-- MOBILE INTERSTITIAL -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Mobile Interstitials</h1>
	</div>
	<div class = "col left">
		<img  src="http://www.rachelratner.com/wp-content/themes/workality/img/ipad.png" />
	</div>
	<div class = "col right">
		<ul>

			<li><span class="mobile-hide"><strong>MockAAX:</strong> </span>Worked with mobile sdk on concepting, testing and installing MockAAX</li>
			<li><span class="mobile-hide"><strong>Shazam:</strong> </span>Integrated templates into Shazam to decrease build time and increase scalability</li>
		</ul>
	</div>
</div>
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">Mobile Interstitials</h1>
	</div>
	<div class = "col left">
		<img  src="http://www.rachelratner.com/wp-content/themes/workality/img/ipad.png" />
	</div>
	<div class = "col right">
		<ul>
			<li><span class="mobile-hide"><strong>AUI:</strong> </span>Partner with AUI team to utilize vetted styles and components</li>
			<li><span class="mobile-hide"><strong>Improved Latency:</strong> </span>Removed dependency on JavaScript libraries and incorporated server-side image optimization</li>
		</ul>
	</div>
</div>

<!-- MOBILE INTERSTITIAL -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">What's next?</h1>
	</div>
	<div class = "col left">
		<img src="http://www.rachelratner.com/wp-content/themes/workality/img/app-download.png" />
	</div>
	<div class = "col right">
		<ul>
			<li>Utilize SASS, zgip, better image optimization, git version tracking</li>
			<li>Build cross-browser components that can be used with KLCD Campaigns as well as interstitials</li>
			<li>Utilize new emerging tecnologies: geolocation, API integration, accelerameter, etc</li>
		</ul>
	</div>
</div>

<!-- MOBILE INTERSTITIAL -->
<div class = "slide">
	<div class = "logo-head">
		<h1 class = "header">What's next?</h1>
	</div>
	<div class = "col left">
		<img src="http://www.rachelratner.com/wp-content/themes/workality/img/app-download.png" />
	</div>
	<div class = "col right">
		<ul>
			<li>Improve benchmarking, data collection, metrics</li>
			<li>Train designers to use responsive design principles</li>
			<li>Build cross department partnerships with Shazam, Mobile, Android SDK, AUI, and A9 Teams</li>
		</ul>
	</div>
</div>


<!-- THANK YOU -->
<div class = "slide" style="text-align:left">
	<div class = "logo-head">
		<h1 class = "header">Thank you<h1>
	</div>
	<div class = "col left">
		<img src="http://www.rachelratner.com/wp-content/themes/workality/img/300.png" />
	</div>
	<div class = "col right">
			<p class = "larger"><strong>Rachel Ratner</strong></br>
			<a class = "larger" href="mailto:ratnerr@amazon.com">ratnerr@amazon.com</a></br>
			<a class = "larger" href="http://www.rachelratner.com">www.rachelratner.com</a></br>
			<a class = "larger" href="tel:2067787545">(206) 778 - 7545</a></br>
			<a class = "larger" href="http://www.rachelratner.com/resume/">Resume</a>
		</p>
	</div>
</div>
<!-- THANK YOU -->
<div class = "slide main" style="text-align:left">
	<div class = "logo-head">
		<h1 class = "header">Rachel Ratner<h1>
		<h2 class = "subheader">Design Technologist<h2>

	</div>
	<div class = "col left">
		<img class="alignnone size-full wp-image-151" src="http://www.rachelratner.com/wp-content/themes/workality/img/rachel.jpg" />
	</div>
	<div class = "col right">
		<h2>Questions?</h2>
	</div>
</div>
<a class="next button">></a>
<a class="prev button"><</a>
</div>

<div class = "amazon-footer"><strong>Rachel Ratner </strong>| Portfolio | 2014</footer>
<script>
	var slides = $('.slide');
	var numSlides = $('.slide').size();
	var move;
	var i =0;
	var curSlide, nextSlide;
	curSlide = $('cur');
	// space bar or right arrow
	$('body').keyup(function(e){
		if(e.keyCode == 32 || e.keyCode == 39){
			e.preventDefault();
		   // user has pressed space
		   move = "next";
		   moveSlide(move);
		} else if (e.keyCode == 37) {
			e.preventDefault();

		// left arrow
	 		move = "prev";
	   	   	moveSlide(move);
		}
	});

	
	$('.button').on('click', function(e){
		if ( $(e.target).hasClass('next') ) {
			move = "next";
		   	moveSlide(move);
		} else {
			move = "prev";
	   	   	moveSlide(move);
		}
		screenHeight();

	})

	function moveSlide(move) {
		var dir;
		cur = $('.slide').index('.cur');
			if (move == "next" && i < numSlides-1) {
					i++;
			} else if (move == "prev" && i > 0) {
					i--;

			} 
			$('.cur').removeClass('cur');
			$(slides[i]).addClass('cur');
			//update cur
			cur = $('.slide')[i];
		
	}
	function screenHeight(){
		/*var newHeight;
		newHeight = $('.amazon-footer').height() +$('.amazon-footer').height()+ $('.cur .logo-head').height() + $('.cur .left').height() + $('.cur .right').height();
		console.log(newHeight, window.innerHeight);

		if (newHeight > window.innerHeight) {
			$('html').height(newHeight);
			$('body').height(newHeight);
			$('.amazon-footer').hide();
		} else {
			$('html').height('100%');
			$('body').height('100%');
		}*/

	}
	screenHeight();
	$(window).on('resizse', function(){
		screenHeight();

	})
</script>
<?php get_footer(); ?>