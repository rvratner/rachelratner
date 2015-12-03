var React = require('react');
var ReactDOM = require('react-dom');

var data = [
  {
    id         : "slide1",
    imagePath  : "images/starbucks2.png",
    imageAlt   : "Starbuck",
    title      : "Rachel Ratner",
    subtitle   : "Web Developer & Design Technologist",
  },
  {
    id         : "slide2",
    imagePath  : "images/code.jpg",
    imageAlt   : "Skills",
    title      : "Skills",
    subtitle   : "Building scalable mobile-first web apps",
    text       : "Core competencies: HTML, CSS and JavaScript (including ECMA 6, React, Angular, Node), PHP, Perl and Java."
  },
   {
    id         : "slide3",
    imagePath  : "images/NirvanaMap.jpg",
    title      : "Seattle Band Map",
    subtitle   : "Music history art project and crowd-sourced website",
    text       : "Published in Wired Magazine, and on display at Nordstroms, EMP and Sea-Tac Airport. Since 2011, the number of bands increased from 300 to 10,000.",
    action     : "View project",
    actionHref : "http://www.seattlebandmap.com"
  },
  {
    id         : "slide4",
    imagePath  : "images/freelance.jpg",
    title      : "Background",
    subtitle   : "Freelance and Agency Work",
    text       : "Worked at a variety of agencies including Cole & Webber, Plexi Pixel and BKWLD. Built custom webpages, Facebook Apps, Wordpress sites and an interactive meme generator",
    action     : "View projects",
    actionHref : "http://www.rachelratner.com"
  },
   {
    id         : "slide5",
    imagePath  : "images/pokemon.png",
    title      : "Agency Work: Pokemon",
    subtitle   : "Finding flexibility within inflexibility",
    text       : "Contracted with Plexipixel to build a localized animation-heavy site based on story boards. The result was a backwards compatable exprience with imrpoved latency and smooth transitions.",
     action     : "View project",
    actionHref : "http://www.rachelratner.com/works/pokemon/"
  },
   {
    id         : "slide6",
    imagePath  : "images/springdistrict.png",
    title      : "Agency Work: The Spring District",
    subtitle   : "Meeting Customer Expectations in an unexpected way",
    text       : "Contracted with Hey, Advertising to improve latency on an interactive map.  I rebuilt the expreince from scratch, improving latency and providng a more responsive design, while still reamining in the alloted budget.",
    action     : "View project",
    actionHref : "http://www.rachelratner.com/works/the-spring-district/"
  },
   {
    id         : "slide7",
    imagePath  : "images/starbucks.png",
    title      : "Amazon",
    subtitle   : "Custom Campaigns, Products & Prototypes",
    text       : "Spent the past two years as a Design Technologist on the Advertising, Display and User Experience Team."
  },
   {
    id         : "slide8",
    imagePath  : "images/premium.png",
    title      : "Amazon: Custom Landing Pages",
    subtitle   : "Custom Campaigns",
    text       : "Translated PSDs indo custom landing pages for desktop, Kindle and mobile devices. Utilized AUI, Shazam, React.js, Handlebar.js, sass and gulp to create lightweight interactive experiences."
  },
   {
    id         : "slide9",
    imagePath  : "images/interstitial.png",
    title      : "Amazon: Mobile Interstitials",
    subtitle   : "Scalable Products",
    text       : "Built reusable, scalable mobile templates for in-app interstitials, including Amazon's first mobile video offering."
  },
   {
    id         : "slide10",
    imagePath  : "images/Amazon-Echo.jpg",
    title      : "Amazon: Prototypes",
    subtitle   : "Rapid iteration and cutting edge technology",
    text       : "Prototyped campaign ideas for sales team to bring on client pitches, including integrating Geolocation and Acceleratometer on Kindle, encorporating the javascript Speech API on mobile devices, and engaging customers with Echo."
  },
   {
    id         : "slide11",
    imagePath  : "images/Top-Secret-Icon.png",
    title      : "Amazon: Corporate Project",
    subtitle   : "Learned Java and Perl while embeded on corportae project",
    text       : "Built custom widgets for Retail Website in Mason/Perl, integrated with AUI, Coral, DynanoDB and Sanatana to build scalable customer experiences. Built integration and unit tests using Selenium."
  },
   {
    id         : "slide12",
    imagePath  : "images/datastructures.jpg",
    title      : "What's next?",
    subtitle   : "Build on core engineering skillsets.",
    text       : " Improve Object Oriented programming, Data Structures and Algorithms, become more proficient in Java and other back-end technologies"
  },
   {
    id         : "slide13",
    imagePath  : "images/rachel.jpg",
    title      : "Thank you",
    subtitle   : "Questions?",
    text       : "ratnerr@amazon.com /n (206) 778-7545",
    action     : "Portfolio",
    actionHref : "http://www.rachelratner.com"
  }
];

// App state
var state = {
  currentSlide: 0,
  data        : []
}

// State transitions
var actions = {
  toggleNext: function() {
    var current = state.currentSlide;
    var next = current + 1;
    if (next > state.data.length - 1) {
      next = 0;
    }
    state.currentSlide = next;
    render(state)
  },
  togglePrev: function() {
    var current = state.currentSlide;
    var prev = current - 1;
    if (prev < 0) {
      prev = state.data.length - 1;
    }
    state.currentSlide = prev;
    render(state);
  },
  toggleSlide: function(id) {
    var index = state.data.map(function (el) {
      return (
        el.id
      );
    });
    var currentIndex = index.indexOf(id);
    state.currentSlide = currentIndex;
    render(state);
  }
}

var Slideshow = React.createClass({
  render: function() {
    return (
      <div className="slideshow">
        <Slides data={this.props.data} />
        <Controls />
      </div>
    );
  }
});

var Slides = React.createClass({
  render: function() {
    var slidesNodes = this.props.data.map(function (slideNode, index) {
    var isActive = state.currentSlide === index;
      return (
        <Slide active={isActive} key={slideNode.id} imagePath={slideNode.imagePath} imageAlt={slideNode.imageAlt} title={slideNode.title} subtitle={slideNode.subtitle} text={slideNode.text} action={slideNode.action} actionHref={slideNode.actionHref} />
      );
    });
    return (
      <div className="slides">
        {slidesNodes}
      </div>
    );
  }
});


var Slide = React.createClass({
  render: function() {
    var classes = 'slide';
    if (this.props.active) {classes += 'slide--active'};

    return (
      <div className={classes}>
        <h2>{this.props.title}</h2>
        <h3>{this.props.subtitle}</h3>
        <img src={this.props.imagePath}/>
        <p>{this.props.text}</p>
        <a href={this.props.actionHref}>{this.props.action}</a>
      </div>
    );
  }
});

var Controls = React.createClass({
  togglePrev: function() {
    actions.togglePrev();
  },
  toggleNext: function() {
    actions.toggleNext();
  },
  render: function() {
    return (
      <div className="controls">
        <div className="toggle toggle--prev" onClick={this.togglePrev}></div>
        <div className="toggle toggle--next" onClick={this.toggleNext}></div>
      </div>
    );
  }
});

// var Pagination = React.createClass({
//   render: function() {
//     var paginationNodes = this.props.data.map(function (paginationNode, index) {
//       return (
//         <Pager id={paginationNode.id} key={paginationNode.id} title={paginationNode.title}  />
//       );
//     });
//     return (
//       <div className="pagination">
//         {paginationNodes}
//       </div>
//     );
//   }
// });

// var Pager = React.createClass({
//   toggleSlide: function() {
//     actions.toggleSlide(this.props.id);
//   },
//   render: function() {
//     return (
//       <span className="pager" onClick={this.toggleSlide}>{this.props.title}</span>
//     );
//   }
// });

var EmptyMessage = React.createClass({
  render: function() {
    return (
      <div className="empty-message">No Data</div>
    );
  }
});

function render(state) {
  var hasData = state.data.length > 0;
  var component;
  if (hasData) {
    component = <Slideshow data={state.data} />;
  }
  else {
    component = <EmptyMessage />;
  }
  ReactDOM.render(
    component,
    document.getElementById('app')
  );
}

render(state);

setTimeout(function() {
  state.data = data;
  render(state);
}, 50);
