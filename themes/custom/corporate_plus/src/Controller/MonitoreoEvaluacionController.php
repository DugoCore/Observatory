<?php

namespace Drupal\corporate_plus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controlador para la página de Monitoreo y Evaluación.
 */
class MonitoreoEvaluacionController extends ControllerBase {

  /**
   * Renderiza la página de Monitoreo y Evaluación.
   *
   * @return array
   *   Array de renderizado.
   */
  public function content() {
    return [
      '#theme' => 'page__monitoreo_evaluacion',
      '#attached' => [
        'library' => [
          'corporate_plus/components',
        ],
      ],
    ];
  }

} 