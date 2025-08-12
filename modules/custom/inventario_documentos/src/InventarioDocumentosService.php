<?php

namespace Drupal\inventario_documentos;

use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Servicio para manejar documentos del inventario.
 */
class InventarioDocumentosService {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs a new InventarioDocumentosService object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Obtiene todos los documentos del inventario.
   *
   * @return array
   *   Array de nodos de documentos.
   */
  public function getDocumentos() {
    try {
      $query = $this->entityTypeManager->getStorage('node')->getQuery()
        ->condition('type', 'documento_de_inventario')
        ->condition('status', 1)
        ->sort('created', 'DESC')
        ->accessCheck(FALSE);

      $nids = $query->execute();
      
      if (!empty($nids)) {
        $nodes = $this->entityTypeManager->getStorage('node')->loadMultiple($nids);
        \Drupal::logger('inventario_documentos')->notice('Found @count documents', ['@count' => count($nodes)]);
        return $nodes;
      } else {
        \Drupal::logger('inventario_documentos')->notice('No documents found');
        return [];
      }
    } catch (\Exception $e) {
      \Drupal::logger('inventario_documentos')->error('Error getting documents: @error', ['@error' => $e->getMessage()]);
      return [];
    }
  }

  /**
   * Obtiene el campo de archivo de un nodo.
   *
   * @param \Drupal\node\NodeInterface $node
   *   El nodo.
   *
   * @return \Drupal\file\FileInterface|null
   *   El archivo o null si no existe.
   */
  public function getFileField($node) {
    // Buscar en los campos de archivo conocidos
    $known_field_names = [
      'field_archivo_del_documento',
      'field_documento',
      'field_archivo',
    ];

    foreach ($known_field_names as $field_name) {
      if ($node->hasField($field_name) && !$node->get($field_name)->isEmpty()) {
        $file = $node->get($field_name)->entity;
        if ($file) {
          return $file;
        }
      }
    }

    return null;
  }

}
