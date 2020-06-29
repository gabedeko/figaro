// import external dependencies
import 'jquery';
import 'bootstrap';
import 'popper.js';
import 'slick-carousel/slick/slick.min.js';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

$(document).ready(function(){
  $('.figaro-slider-row').slick({
    autoplay: false,
    draggable: true,
    infinite: true,
    slidesToScroll: 1,
  });
});
