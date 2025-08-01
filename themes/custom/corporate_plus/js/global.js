/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.corporate_plus = {
    attach: function (context, settings) {

      $('#header-2 .navbar-toggler svg').click(function(){
        $('#header-2').toggleClass('nav-header-2');
      })

      $('.header .open.navbar-toggler ').click(function(){
        $('.header .open.navbar-toggler').addClass('d-none');
        $('.header .close.navbar-toggler').removeClass('d-none');

      })

      $('.header .close.navbar-toggler ').click(function(){
        $('.header .close.navbar-toggler').addClass('d-none');
        $('.header .open.navbar-toggler').removeClass('d-none');
      })

      $('select').niceSelect();

      // Back-to-top
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".back-to-top");
          $nav.toggleClass("back-to-top-hide", $(this).scrollTop() < 500);
        });
      });
      
      //tooltip
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })

      // Add title Attribute
      var flag = true;
      let termTitle;
      if(flag){  
          $('.term-link a').each(function() {
          termTitle=$(this).html();
          $(this).attr("title",termTitle);
          });
          flag=false;  
      }

      //portfolio-tab
      $('.projects-tab .projects-lists').isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows',
      });
      
      $(".projects-tab .tabs-menu ul li").click(function () {
        $(".projects-tab .tabs-menu ul li").removeClass("active");
        $(this).addClass("active");
        var selector;
        selector = $(this).attr("data-filter");
        $(".projects-tab .projects-lists").isotope({
          filter: selector,
        });
        return false;
      });
      
      
      $('.projects-tab-masonry .projects-lists').isotope({
        itemSelector: '.item',
        masonry:{
          columnWidth:1
        }
      });
      
      $(".projects-tab-masonry .tabs-menu ul li").click(function () {
        $(".projects-tab-masonry .tabs-menu ul li").removeClass("active");
        $(this).addClass("active");
        var selector;
        selector = $(this).attr("data-filter");
        $(".projects-tab-masonry .projects-lists").isotope({
          filter: selector,
        });
        return false;
      });

      //magnific-popup
      $('.projects-lists .icon a').magnificPopup({
        // delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1]
        }
      });

      // Owl Carousel
      $(function () {
        $(".slider-1-home").owlCarousel({
          autoplay: false,
          autoplayTimeout: 5000,
          loop: true,
          dotsData: true,
          margin: 0,
          dots:true,
          nav: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1 
              }
          }
        });
      });

      $(function () {
        $(".slider-2-home").owlCarousel({
          autoplay: false,
          autoplayTimeout: 5000,
          loop: true,
          margin: 0,
          dots:true,
          dotsData: true,
          nav: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1 
              }
          }
        });

        var owl4 = $(".slider-2-home");
        owl4.owlCarousel();
        $(".home-slider-2 .arrows .next").click(function () {
          owl4.trigger("next.owl.carousel");
        });
        $(".home-slider-2 .arrows .prev").click(function () {
          owl4.trigger("prev.owl.carousel");
        });
      });

      $(function () {
        $(".slider-3-home").owlCarousel({
          autoplay: false,
          autoplayTimeout: 5000,
          loop: true,
          margin: 0,
          dots:false,
          nav: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1 
              }
          }
        });
        var owl4 = $(".slider-3-home");
        owl4.owlCarousel();
        $(".home-slider-3 .arrows .next").click(function () {
          owl4.trigger("next.owl.carousel");
        });
        $(".home-slider-3 .arrows .prev").click(function () {
          owl4.trigger("prev.owl.carousel");
        });
      });
      

      $(function () {
        $(".style-1-slider").owlCarousel({
          autoplay: false,
          autoplayTimeout: 5000,
          loop: true,
          slideBy:3,
          margin: 30,
          nav: false,
          responsive: {
              0:{
                  items:1,
                  dotsEach:5,
              },
              600:{
                  items:2,
                  dotsEach:5,
              },
              1000:{
                  items:3
              }
          }
        });
        var owl = $(".style-1-slider");
        owl.owlCarousel();
        $(".slider-style-1 .arrows .next").click(function () {
          owl.trigger("next.owl.carousel");
        });
        $(".slider-style-1 .arrows .prev").click(function () {
          owl.trigger("prev.owl.carousel");
        });
        $(".style-1-slider .owl-dots").addClass("owl-dots-1");
      });
    
      $(function () {
        $(".style-2-slider").owlCarousel({
          autoplay: true,
          autoplayTimeout: 5000,
          loop: true,
          slideBy:3,
          margin: 30,
          nav: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:3
              }
          }
        });
        var owl2 = $(".style-2-slider");
        owl2.owlCarousel();
        $(".slider-style-2 .arrows .next").click(function () {
          owl2.trigger("next.owl.carousel");
        });
        $(".slider-style-2 .arrows .prev").click(function () {
          owl2.trigger("prev.owl.carousel");
        });
        $(".style-2-slider .owl-dots").addClass("owl-dots-1");
      });
    
      $(function () {
        $(".style-3-slider").owlCarousel({
          autoplay: true,
          autoplayTimeout: 5000,
          loop: true,
          margin: 70,
          dots:false,
          nav: false,
          responsive: {
              0:{
                  items:1,
                  
              },
              600:{
                  items:3,
                  
              },
              1000:{
                  items:5
              }
          }
        });

      });
    
      $(function () {
        $(".style-4-slider").owlCarousel({
          autoplay: true,
          autoplayTimeout: 5000,
          loop: true,
          margin: 10,
          nav: false,
          dots: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
        });
        var owl = $(".style-4-slider");
        owl.owlCarousel();
        $(".slider-style-4 .arrows .next").click(function () {
          owl.trigger("next.owl.carousel");
        });
        $(".slider-style-4 .arrows .prev").click(function () {
          owl.trigger("prev.owl.carousel");
        });
      });
    
      $(function () {
        $(".style-5-slider").owlCarousel({
          autoplay: true,
          autoplayTimeout: 5000,
          loop: true,
          margin: 100,
          dots:false,
          nav: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:3
              }
          }
        });
      });

      $(function () {
        $(".clients-3-slider").owlCarousel({
          autoplay: true,
          autoplayTimeout: 5000,
          loop: true,
          margin: 200,
          dots:false,
          nav: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:3
              }
          }
        });
      });
    
      $(function () {
        $(".style-6-slider").owlCarousel({
          autoplay: false,
          autoplayTimeout: 2000,
          loop: true,
          margin: 90,
          nav: false,
          dots: false,
          responsive: {
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              },
              1025:{
                  items:1
              }
          }
        });
      var owl6 = $(".style-6-slider");
      owl6.owlCarousel();
      $(".slider-style-6 .arrows .next").click(function () {
        owl6.trigger("next.owl.carousel");
      });
      $(".slider-style-6 .arrows .prev").click(function () {
        owl6.trigger("prev.owl.carousel");
      });
      });

      // Timer coming soon
      function getTimeRemaining(endtime) {
        var t = Date.parse(settings.custom_date) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
          'total': t,
          'days': days,
          'hours': hours,
          'minutes': minutes,
          'seconds': seconds
          };
            }
          function initializeClock(id, endtime) {
          var clock = document.getElementById(id);
          var daysSpan = clock.querySelector('.days');
          var hoursSpan = clock.querySelector('.hours');
          var minutesSpan = clock.querySelector('.minutes');
          var secondsSpan = clock.querySelector('.seconds');
          function updateClock() {
            var t = getTimeRemaining(endtime);
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
            if (t.total <= 0) {
              clearInterval(timeinterval);
              document.getElementById("clockdiv").innerHTML = settings.custom_message_dateExpired;
            }
          }
          updateClock();
          var timeinterval = setInterval(updateClock, 1000);
        }
        var deadline = new Date(Date.parse(new Date()));
        if($("#clockdiv").length){
          initializeClock('clockdiv', deadline);
        }
        
        //Pre-loader
        $(window).on('load', () => {
          $('.loader-bg').fadeOut();
          $('.loader').delay(350).fadeOut('slow', function() {
            $(this).remove();
          });
          $('body').delay(350).css({'overflow':'visible'});
        });

         // Comment Form Validation
         function validate(){
          var cnv = $('form.comment-form textarea').val();
          if (!$.trim(cnv)) {
            $(once('comment_form_validate','form.comment-form textarea')).after('<span class="error">Add Comment before Submission</span>');
              return false;
          } else { return true; }
        }
        $(once('form_validate','form.comment-form')).submit(validate);

         // CODE_BLOCK JS
        var $code_block =  $("pre").attr("class");
        // console.log($code_block);
        if($code_block == "language-markup")
        {
        var elementCopy = document.getElementsByClassName("language-markup");
        if(typeof(elementCopy) != 'undefined' && elementCopy != null){ 
            var clipboard = new ClipboardJS('.clipboard');   
            clipboard.on('success', function (e) {
            e.trigger.textContent = 'Copied';
            window.setTimeout(function() {
                e.trigger.textContent = 'Copy to Clipboard';
            }, 8000);
            console.log(e);
            });
            clipboard.on('error', function (e) {
            console.log(e);
            });
        }
      }
    }
  };

})(jQuery, Drupal);
