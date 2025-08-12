/**
 * Observatory Dropdown Menu Enhancement
 * Provides smooth hover effects and proper dropdown functionality
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.observatoryDropdown = {
    attach: function (context, settings) {
      // Initialize dropdown functionality
      this.initDropdowns(context);
    },

    initDropdowns: function (context) {
      const $dropdowns = $(context).find('#header-observatory .nav-item.dropdown');
      
      $dropdowns.each(function () {
        const $dropdown = $(this);
        const $menu = $dropdown.find('.dropdown-menu');
        const $link = $dropdown.find('.nav-link');
        
        // Add hover event listeners
        $dropdown.on('mouseenter', function () {
          $menu.addClass('show');
          $link.addClass('active');
        });
        
        $dropdown.on('mouseleave', function () {
          $menu.removeClass('show');
          $link.removeClass('active');
        });
        
        // Handle nested dropdowns
        const $nestedDropdowns = $dropdown.find('.dropdown-item.dropdown');
        $nestedDropdowns.each(function () {
          const $nestedDropdown = $(this);
          const $nestedMenu = $nestedDropdown.find('.dropdown-menu');
          
          $nestedDropdown.on('mouseenter', function () {
            $nestedMenu.addClass('show');
          });
          
          $nestedDropdown.on('mouseleave', function () {
            $nestedMenu.removeClass('show');
          });
        });
      });
      
      // Close dropdowns when clicking outside
      $(document).on('click', function (e) {
        if (!$(e.target).closest('#header-observatory .nav-item.dropdown').length) {
          $('#header-observatory .dropdown-menu').removeClass('show');
          $('#header-observatory .nav-link').removeClass('active');
        }
      });
      
      // Handle keyboard navigation
      $dropdowns.find('.nav-link').on('keydown', function (e) {
        const $dropdown = $(this).closest('.nav-item.dropdown');
        const $menu = $dropdown.find('.dropdown-menu');
        
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          $menu.toggleClass('show');
        }
        
        if (e.key === 'Escape') {
          $menu.removeClass('show');
        }
      });
    }
  };

})(jQuery, Drupal);
