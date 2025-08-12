<?php

namespace Drupal\inventario_documentos\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\inventario_documentos\InventarioDocumentosService;

/**
 * Controlador para la página de Inventario de Emisiones.
 */
class InventarioEmisionesController extends ControllerBase {

  /**
   * The inventory documents service.
   *
   * @var \Drupal\inventario_documentos\InventarioDocumentosService
   */
  protected $documentosService;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('inventario_documentos.service')
    );
  }

  /**
   * Constructs a new InventarioEmisionesController object.
   */
  public function __construct(InventarioDocumentosService $documentosService) {
    $this->documentosService = $documentosService;
  }

  /**
   * Renderiza la página de Inventario de Emisiones.
   *
   * @return array
   *   Array de renderizado.
   */
  public function content() {
    // Obtener documentos reales de la base de datos
    $nodes = $this->documentosService->getDocumentos();

    $rows = [];
    
    if (!empty($nodes)) {
      foreach ($nodes as $node) {
        $file = $this->documentosService->getFileField($node);
        
        if ($file) {
          $rows[] = [
            'data' => [
              'title' => [
                'data' => [
                  '#type' => 'html_tag',
                  '#tag' => 'div',
                  '#attributes' => ['class' => ['document-title']],
                  'title' => [
                    '#type' => 'html_tag',
                    '#tag' => 'strong',
                    '#value' => $node->getTitle(),
                  ],
                  'filename' => [
                    '#type' => 'html_tag',
                    '#tag' => 'small',
                    '#attributes' => ['class' => ['document-filename']],
                    '#value' => $file->getFilename(),
                  ],
                ],
              ],
              'date' => [
                'data' => [
                  '#type' => 'html_tag',
                  '#tag' => 'span',
                  '#attributes' => ['class' => ['document-date']],
                  '#value' => date('d/m/Y', $node->getCreatedTime()),
                ],
              ],
              'actions' => [
                'data' => [
                  '#type' => 'html_tag',
                  '#tag' => 'a',
                  '#attributes' => [
                    'href' => $file->createFileUrl(),
                    'class' => ['download-btn', 'btn', 'btn-primary'],
                    'download' => $file->getFilename(),
                    'title' => 'Descargar ' . $file->getFilename(),
                  ],
                  '#value' => '<i class="fas fa-download"></i> Descargar',
                ],
              ],
            ],
          ];
        }
      }
    }

    return [
      '#type' => 'container',
      '#attributes' => ['class' => ['inventario-documentos-container']],
      'table' => [
        '#type' => 'table',
        '#attributes' => [
          'class' => ['inventario-documentos-table', 'table', 'table-striped', 'table-hover'],
        ],
        '#rows' => $rows,
        '#empty' => [
          '#type' => 'html_tag',
          '#tag' => 'div',
          '#attributes' => ['class' => ['no-documents']],
          '#value' => 'No hay documentos disponibles en este momento.',
        ],
      ],
      '#attached' => [
        'library' => [
          'inventario_documentos/inventario_documentos',
        ],
      ],
    ];
  }

}
