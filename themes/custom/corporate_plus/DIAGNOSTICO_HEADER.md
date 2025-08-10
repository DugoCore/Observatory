# Diagnóstico del Header del Observatorio

## Pasos de Verificación

### 1. Verificar si el Header de Prueba Aparece
- He creado un header de prueba con fondo ROJO
- Si ves un header rojo en la parte superior, el problema es con el CSS del header original
- Si NO ves el header rojo, el problema es con la renderización de Twig

### 2. Verificar en el Navegador
1. Abre las herramientas de desarrollador (F12)
2. Ve a la pestaña "Elements"
3. Busca el elemento `#header-test` (header rojo)
4. Si no existe, busca `#header-observatory`

### 3. Verificar en la Consola
1. En las herramientas de desarrollador, ve a "Console"
2. Busca errores de JavaScript
3. Busca errores de CSS

### 4. Verificar en Network
1. En las herramientas de desarrollador, ve a "Network"
2. Verifica que `style.css` se esté cargando
3. Verifica que no haya errores 404

## Posibles Problemas y Soluciones

### Problema 1: Header No Se Renderiza
**Síntomas:** No ves ningún header
**Causa:** Problema con Twig o template
**Solución:**
1. Verificar que el tema esté activo
2. Limpiar cache de Drupal
3. Verificar sintaxis de Twig

### Problema 2: Header Se Renderiza Pero No Es Visible
**Síntomas:** Ves el header en el código pero no en pantalla
**Causa:** CSS que oculta el header
**Solución:**
1. Verificar CSS con `!important`
2. Verificar z-index
3. Verificar position y display

### Problema 3: Header Aparece Pero En Posición Incorrecta
**Síntomas:** Header visible pero no fijo en la parte superior
**Causa:** CSS de position incorrecto
**Solución:**
1. Verificar `position: fixed`
2. Verificar `top: 0`
3. Verificar `z-index`

## Comandos de Verificación

### Verificar Estado del Tema:
```bash
drush theme:status
```

### Limpiar Cache:
```bash
drush cr
```

### Verificar Archivos del Tema:
```bash
ls -la themes/custom/corporate_plus/templates/header/
```

### Verificar CSS:
```bash
grep -r "header-observatory" themes/custom/corporate_plus/css/
```

## Próximos Pasos

1. **Si ves el header rojo:** El problema es con el CSS del header original
2. **Si NO ves el header rojo:** El problema es con la renderización de Twig
3. **Si ves errores en la consola:** Hay un problema de JavaScript o CSS

## Restaurar Header Original

Una vez que identifiquemos el problema, restauraremos el header original:

```twig
{% include '@corporate_plus/header/header-observatory.html.twig' %}
```

## CSS de Emergencia

Si el header no aparece, puedes agregar este CSS directamente en el template:

```html
<style>
#header-observatory {
  background: white !important;
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  right: 0 !important;
  z-index: 9999 !important;
  display: block !important;
  visibility: visible !important;
  opacity: 1 !important;
  min-height: 80px !important;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
}
</style>
``` 