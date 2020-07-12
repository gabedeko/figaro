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
    slidesToShow: 2,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
  });

  $(window).scroll(function(){
    $('nav').toggleClass('scroll', $(this).scrollTop() > 200);
  })
});


(function($){
  $('#facial-tab-0').click(function(){
    //Fade in facial message
    $('#facial-msg-0').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-0').siblings().removeClass('animate__fadeIn');
    //Fade in facial process
    $('#facial-process-0').addClass('animate__animated animate__fadeIn');
    $('#facial-process-0').siblings().removeClass('animate__fadeIn');
    //fade in facial process image
    $('#facial-process-img-0').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-0').siblings().removeClass('animate__fadeIn');
    //fade in facial top left title
    $('#facial-top-left-0').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-0').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-1').click(function(){
    $('#facial-msg-1').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-1').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-1').addClass('animate__animated animate__fadeIn');
    $('#facial-process-1').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-1').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-1').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-1').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-1').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-2').click(function(){
    $('#facial-msg-2').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-2').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-2').addClass('animate__animated animate__fadeIn');
    $('#facial-process-2').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-2').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-2').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-2').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-2').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-3').click(function(){
    $('#facial-msg-3').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-3').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-3').addClass('animate__animated animate__fadeIn');
    $('#facial-process-3').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-3').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-3').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-3').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-3').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-4').click(function(){
    //Fade in facial message
    $('#facial-msg-4').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-4').siblings().removeClass('animate__fadeIn');
    //Fade in facial process
    $('#facial-process-4').addClass('animate__animated animate__fadeIn');
    $('#facial-process-4').siblings().removeClass('animate__fadeIn');
    //fade in facial process image
    $('#facial-process-img-4').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-4').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-4').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-4').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-5').click(function(){
    $('#facial-msg-5').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-5').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-5').addClass('animate__animated animate__fadeIn');
    $('#facial-process-5').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-5').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-5').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-5').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-5').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-6').click(function(){
    $('#facial-msg-6').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-6').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-6').addClass('animate__animated animate__fadeIn');
    $('#facial-process-6').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-6').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-6').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-6').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-6').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-7').click(function(){
    $('#facial-msg-7').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-7').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-7').addClass('animate__animated animate__fadeIn');
    $('#facial-process-7').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-7').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-7').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-7').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-7').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-8').click(function(){
    //Fade in facial message
    $('#facial-msg-8').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-8').siblings().removeClass('animate__fadeIn');
    //Fade in facial process
    $('#facial-process-8').addClass('animate__animated animate__fadeIn');
    $('#facial-process-8').siblings().removeClass('animate__fadeIn');
    //fade in facial process image
    $('#facial-process-img-8').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-8').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-8').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-8').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-9').click(function(){
    $('#facial-msg-9').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-9').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-9').addClass('animate__animated animate__fadeIn');
    $('#facial-process-9').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-9').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-9').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-9').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-9').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-10').click(function(){
    $('#facial-msg-10').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-10').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-10').addClass('animate__animated animate__fadeIn');
    $('#facial-process-10').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-10').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-10').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-10').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-10').siblings().removeClass('animate__fadeIn');
  });
  $('#facial-tab-11').click(function(){
    $('#facial-msg-11').addClass('animate__animated animate__fadeIn');
    $('#facial-msg-11').siblings().removeClass('animate__fadeIn');
    
    $('#facial-process-11').addClass('animate__animated animate__fadeIn');
    $('#facial-process-11').siblings().removeClass('animate__fadeIn');

    $('#facial-process-img-11').addClass('animate__animated animate__fadeIn');
    $('#facial-process-img-11').siblings().removeClass('animate__fadeIn');

    $('#facial-top-left-12').addClass('animate__animated animate__fadeIn');
    $('#facial-top-left-12').siblings().removeClass('animate__fadeIn');
  });
})(jQuery);