# Debug del Header del Observatorio

## Problemas Comunes y Soluciones

### 1. Header No Visible
**Posibles causas:**
- Tema no activado
- Cache no limpiado
- CSS no cargado
- Variables Twig no definidas

**Soluciones:**
1. Activar el tema en Drupal Admin > Apariencia
2. Limpiar cache en Drupal Admin > Configuración > Rendimiento
3. Verificar que el archivo CSS se esté cargando
4. Revisar la consola del navegador para errores

### 2. Logo No Visible
**Posibles causas:**
- Logo no configurado en Drupal
- Ruta incorrecta del logo
- CSS que oculta el logo

**Soluciones:**
1. Configurar logo en Drupal Admin > Apariencia > Configuración
2. Verificar que el logo esté en la carpeta correcta
3. Revisar CSS para `.circular-logo img`

### 3. Menú No Visible
**Posibles causas:**
- Menú no configurado
- CSS que oculta el menú
- JavaScript no funcionando

**Soluciones:**
1. Configurar menú en Drupal Admin > Estructura > Menús
2. Verificar que el menú tenga enlaces
3. Revisar CSS para `.navbar-nav`

### 4. Estilos No Aplicados
**Posibles causas:**
- CSS no cargado
- Conflictos con otros estilos
- Cache del navegador

**Soluciones:**
1. Verificar que `style.css` se esté cargando
2. Limpiar cache del navegador (Ctrl+F5)
3. Revisar prioridad de CSS

## Verificación Rápida

### En Drupal Admin:
1. Ve a **Administración > Apariencia**
2. Verifica que "Corporate Plus" esté instalado y activo
3. Ve a **Administración > Configuración > Información del sitio**
4. Verifica que la página principal esté configurada

### En el Navegador:
1. Abre las herramientas de desarrollador (F12)
2. Ve a la pestaña "Console" y busca errores
3. Ve a la pestaña "Network" y verifica que los archivos CSS se carguen
4. Ve a la pestaña "Elements" y busca el elemento `#header-observatory`

### Verificación de Archivos:
1. Verifica que `header-observatory.html.twig` existe
2. Verifica que `style.css` contiene los estilos del header
3. Verifica que `page--front.html.twig` incluye el header correcto

## Comandos Útiles

### Limpiar Cache de Drupal:
```bash
drush cr
```

### Verificar Estado del Tema:
```bash
drush theme:status
```

### Instalar Tema:
```bash
drush theme:install corporate_plus
```

### Establecer Tema como Predeterminado:
```bash
drush theme:enable corporate_plus
drush config:set system.theme default corporate_plus -y
```

## Estructura Esperada del Header

```html
<header id="header-observatory" class="header fixed-top header_type navSticky">
  <div class="menubar">
    <div class="container">
      <!-- Logo del Observatorio -->
      <div class="header-observatory-logo d-none d-lg-block">
        <div class="logo-container">
          <div class="circular-logo">
            <!-- Logo aquí -->
          </div>
          <div class="logo-text">
            <span class="ministry-name">MINISTERIO DE MEDIO AMBIENTE</span>
          </div>
        </div>
      </div>
      
      <!-- Menú Principal -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent_observatory">
        <!-- Menú aquí -->
      </div>
      
      <!-- Botón Administrador -->
      <div class="get-quote-btn d-none d-lg-block">
        <a class="btn btn-primary btn-style-1 btn-sm" href="/user/login">Administrador</a>
      </div>
    </div>
  </div>
</header>
```

## CSS Requerido

```css
#header-observatory {
  background: white;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
}

.header-observatory-logo {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.circular-logo {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, #1e3a8a, #3b82f6);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 8px rgba(30, 58, 138, 0.3);
  overflow: hidden;
}

.ministry-name {
  font-size: 0.75rem;
  font-weight: 600;
  color: #333;
  font-family: 'Cabin', sans-serif;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  line-height: 1.2;
}
``` 