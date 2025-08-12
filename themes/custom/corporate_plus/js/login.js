/**
 * Login Form JavaScript
 * Handles password visibility toggle and form enhancements
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.loginForm = {
    attach: function (context, settings) {
      
      // Password visibility toggle
      $('.password-toggle', context).once('password-toggle').on('click', function(e) {
        e.preventDefault();
        
        const $button = $(this);
        const $input = $button.siblings('input[type="password"], input[type="text"]');
        const $icon = $button.find('.eye-icon');
        
        if ($input.attr('type') === 'password') {
          // Show password
          $input.attr('type', 'text');
          $icon.html(`
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <line x1="1" y1="1" x2="23" y2="23" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          `);
          $button.attr('aria-label', 'Ocultar contraseña');
        } else {
          // Hide password
          $input.attr('type', 'password');
          $icon.html(`
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          `);
          $button.attr('aria-label', 'Mostrar contraseña');
        }
      });

      // Form validation enhancement
      $('.login-form', context).once('login-form').on('submit', function(e) {
        const $form = $(this);
        const $username = $form.find('input[name="name"]');
        const $password = $form.find('input[name="pass"]');
        let hasErrors = false;

        // Clear previous error states
        $('.input-wrapper').removeClass('has-error');
        $('.error-message').remove();

        // Validate username
        if (!$username.val().trim()) {
          $username.closest('.input-wrapper').addClass('has-error');
          $username.after('<div class="error-message">El campo Usuario es requerido</div>');
          hasErrors = true;
        }

        // Validate password
        if (!$password.val().trim()) {
          $password.closest('.input-wrapper').addClass('has-error');
          $password.after('<div class="error-message">El campo Contraseña es requerido</div>');
          hasErrors = true;
        }

        if (hasErrors) {
          e.preventDefault();
          return false;
        }

        // Show loading state
        const $submitButton = $form.find('.form-submit');
        const originalText = $submitButton.text();
        $submitButton.text('Ingresando...').prop('disabled', true);

        // Re-enable button after a delay (in case of error)
        setTimeout(function() {
          $submitButton.text(originalText).prop('disabled', false);
        }, 5000);
      });

      // Auto-focus on username field
      $('input[name="name"]', context).once('auto-focus').focus();

      // Keyboard navigation enhancement
      $('.login-form input', context).once('keyboard-nav').on('keydown', function(e) {
        if (e.key === 'Enter' && e.target.name === 'name') {
          e.preventDefault();
          $('input[name="pass"]').focus();
        }
      });

    }
  };

})(jQuery, Drupal);
