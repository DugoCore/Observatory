/**
 * Componentes JS - Header y Footer
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.corporatePlusComponents = {
    attach: function (context, settings) {
      
      // Back to top functionality
      $(context).once('back-to-top').each(function () {
        var $backToTop = $('.back-to-top');
        
        if ($backToTop.length) {
          // Show/hide back to top button based on scroll
          $(window).on('scroll', function () {
            if ($(this).scrollTop() > 300) {
              $backToTop.addClass('show');
            } else {
              $backToTop.removeClass('show');
            }
          });
          
          // Smooth scroll to top when clicked
          $backToTop.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
              scrollTop: 0
            }, 800);
          });
        }
      });
      
      // Header scroll effect
      $(context).once('header-scroll').each(function () {
        var $header = $('#header-observatory');
        
        if ($header.length) {
          $(window).on('scroll', function () {
            if ($(this).scrollTop() > 50) {
              $header.addClass('scrolled');
            } else {
              $header.removeClass('scrolled');
            }
          });
        }
      });
      
      // Footer links hover effect
      $(context).once('footer-links').each(function () {
        $('.pt-footer ul li a').on('mouseenter', function () {
          $(this).addClass('hover');
        }).on('mouseleave', function () {
          $(this).removeClass('hover');
        });
      });
      
      // Mobile menu toggle (if needed)
      $(context).once('mobile-menu').each(function () {
        $('.navbar-toggler').on('click', function () {
          $('.navbar-collapse').toggleClass('show');
        });
      });
      
    }
  };

})(jQuery, Drupal);
