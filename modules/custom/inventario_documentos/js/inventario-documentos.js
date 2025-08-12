/**
 * JavaScript para el módulo Inventario Documentos
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.inventarioDocumentos = {
    attach: function (context, settings) {
      // Inicializar cuando se carga la página
      once('inventario-documentos', '.inventario-documentos-table', context).forEach(function (element) {
        // Agregar funcionalidad de hover mejorada
        $(element).find('tr').hover(
          function() {
            $(this).addClass('hover-active');
          },
          function() {
            $(this).removeClass('hover-active');
          }
        );

        // Agregar funcionalidad de click en las filas
        $(element).find('tr').click(function(e) {
          // No activar si se hace click en el botón de descarga
          if (!$(e.target).closest('.download-btn').length) {
            $(this).toggleClass('selected');
          }
        });

        // Mejorar la experiencia del botón de descarga
        $(element).find('.download-btn').hover(
          function() {
            $(this).addClass('btn-hover');
          },
          function() {
            $(this).removeClass('btn-hover');
          }
        );
      });

      // Funcionalidad para filtros (si se implementan en el futuro)
      if (settings.inventarioDocumentos && settings.inventarioDocumentos.filters) {
        this.initializeFilters(context, settings);
      }
    },

    initializeFilters: function(context, settings) {
      // Código para futuros filtros
      console.log('Filtros de inventario inicializados');
    }
  };

  // Funciones de utilidad
  Drupal.inventarioDocumentos = {
    // Función para mostrar notificaciones
    showNotification: function(message, type) {
      if (Drupal.behaviors.drupalMessage) {
        Drupal.behaviors.drupalMessage.attach(document, {
          messages: [{
            type: type || 'status',
            text: message
          }]
        });
      }
    },

    // Función para validar tipos de archivo
    validateFileType: function(filename, allowedTypes) {
      if (!allowedTypes || allowedTypes.length === 0) {
        return true;
      }
      
      const extension = filename.split('.').pop().toLowerCase();
      return allowedTypes.includes(extension);
    }
  };

})(jQuery, Drupal);
