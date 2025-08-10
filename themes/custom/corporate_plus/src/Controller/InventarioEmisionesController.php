<?php

namespace Drupal\corporate_plus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador para la página de Inventario de Emisiones.
 */
class InventarioEmisionesController extends ControllerBase {

  /**
   * Renderiza la página de Inventario de Emisiones.
   *
   * @return array
   *   Array de renderizado.
   */
  public function content() {
    return [
      '#theme' => 'page__inventario_emisiones',
      '#attached' => [
        'library' => [
          'corporate_plus/components',
        ],
      ],
    ];
  }

} 