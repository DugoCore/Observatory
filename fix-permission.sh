#!/bin/bash
# fix-permissions.sh

DRUPAL_PATH=$(pwd)

echo "Aplicando permisos para Drupal en Docker..."

# Archivos y directorios para www-data
chown -R 33:33 "$DRUPAL_PATH/sites/default/files"
chmod -R 755 "$DRUPAL_PATH/sites/default/files"

# Settings.php
chown 33:33 "$DRUPAL_PATH/sites/default/settings.php"
chmod 644 "$DRUPAL_PATH/sites/default/settings.php"

echo "Permisos aplicados correctamente."