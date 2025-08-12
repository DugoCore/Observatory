<?php

namespace Drupal\inventario_documentos\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador de prueba para el módulo inventario_documentos.
 */
class TestController extends ControllerBase {

  /**
   * Página de prueba simple.
   */
  public function test() {
    return [
      '#markup' => '<h1>¡El controlador del módulo funciona!</h1><p>Esta es una página de prueba del módulo inventario_documentos.</p>',
    ];
  }

}
