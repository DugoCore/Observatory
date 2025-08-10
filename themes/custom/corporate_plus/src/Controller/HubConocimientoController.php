<?php

namespace Drupal\corporate_plus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador para la página de Hub de Conocimiento.
 */
class HubConocimientoController extends ControllerBase {

  /**
   * Renderiza la página de Hub de Conocimiento.
   *
   * @return array
   *   Array de renderizado.
   */
  public function content() {
    return [
      '#theme' => 'page__hub_conocimiento',
      '#attached' => [
        'library' => [
          'corporate_plus/components',
        ],
      ],
    ];
  }

} 