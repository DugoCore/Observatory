<?php

namespace Drupal\corporate_plus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador para la página de Registro Nacional de Acciones.
 */
class RegistroAccionesController extends ControllerBase {

  /**
   * Renderiza la página de Registro Nacional de Acciones.
   *
   * @return array
   *   Array de renderizado.
   */
  public function content() {
    return [
      '#theme' => 'page__registro_acciones',
      '#attached' => [
        'library' => [
          'corporate_plus/components',
        ],
      ],
    ];
  }

} 