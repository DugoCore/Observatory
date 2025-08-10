<?php

namespace Drupal\corporate_plus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador para la página de Seguimiento NDC.
 */
class SeguimientoNdcController extends ControllerBase {

  /**
   * Renderiza la página de Seguimiento NDC.
   *
   * @return array
   *   Array de renderizado.
   */
  public function content() {
    return [
      '#theme' => 'page__seguimiento_ndc',
      '#attached' => [
        'library' => [
          'corporate_plus/components',
        ],
      ],
    ];
  }

} 