<?php

// Bootstrap Drupal
require_once 'autoload.php';
$kernel = new \Drupal\Core\DrupalKernel('prod', FALSE);
$kernel->setSitePath('sites/default');
$kernel->boot();
$kernel->preHandle();

try {
  // Verificar si el tipo de contenido existe
  $content_type_manager = \Drupal::entityTypeManager()->getStorage('node_type');
  $content_type = $content_type_manager->load('documento_de_inventario');
  
  if (!$content_type) {
    echo "ERROR: El tipo de contenido 'documento_de_inventario' no existe.\n";
    exit(1);
  }
  
  echo "✓ Tipo de contenido encontrado: " . $content_type->label() . "\n";
  
  // Verificar si el campo ya existe
  $field_storage_manager = \Drupal::entityTypeManager()->getStorage('field_storage_config');
  $field_storage = $field_storage_manager->load('node.field_archivo_del_documento');
  
  if ($field_storage) {
    echo "✓ El campo field_archivo_del_documento ya existe.\n";
  } else {
    // Crear el campo de almacenamiento
    $field_storage = $field_storage_manager->create([
      'field_name' => 'field_archivo_del_documento',
      'entity_type' => 'node',
      'type' => 'file',
      'settings' => [
        'target_type' => 'file',
        'display_field' => TRUE,
        'display_default' => FALSE,
        'uri_scheme' => 'public',
      ],
    ]);
    $field_storage->save();
    echo "✓ Campo de almacenamiento creado: field_archivo_del_documento\n";
  }
  
  // Verificar si la instancia del campo existe
  $field_config_manager = \Drupal::entityTypeManager()->getStorage('field_config');
  $field_config = $field_config_manager->load('node.documento_de_inventario.field_archivo_del_documento');
  
  if ($field_config) {
    echo "✓ La instancia del campo ya existe.\n";
  } else {
    // Crear la instancia del campo
    $field_config = $field_config_manager->create([
      'field_name' => 'field_archivo_del_documento',
      'entity_type' => 'node',
      'bundle' => 'documento_de_inventario',
      'label' => 'Archivo del Documento',
      'settings' => [
        'file_extensions' => 'pdf doc docx xls xlsx ppt pptx txt rtf odt ods odp',
        'file_directory' => 'inventario-documentos/[date:custom:Y]-[date:custom:m]',
      ],
    ]);
    $field_config->save();
    echo "✓ Instancia del campo creada.\n";
  }
  
  echo "\n✅ Campo 'Archivo del Documento' creado exitosamente.\n";
  echo "Ahora puedes ir a: http://observatory.test/admin/structure/types/manage/documento_de_inventario/fields\n";
  
} catch (\Exception $e) {
  echo "ERROR: " . $e->getMessage() . "\n";
  exit(1);
}
