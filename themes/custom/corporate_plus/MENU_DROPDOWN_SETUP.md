# Configuración del Menú Dropdown - Observatorio

## Funcionalidad Implementada

Se ha implementado un sistema de menús dropdown que permite mostrar submenús al pasar el mouse sobre los elementos del menú principal. Específicamente, el menú "Inicio" ahora puede mostrar submenús como "Home Page - 1", "Home Page - 2", y "Home Page - 3".

## Características

- **Hover Effects**: Los submenús aparecen al pasar el mouse sobre los elementos del menú
- **Animaciones Suaves**: Transiciones CSS para una experiencia visual agradable
- **Navegación por Teclado**: Soporte completo para navegación accesible
- **Responsive**: Funciona en dispositivos móviles y de escritorio
- **Nested Dropdowns**: Soporte para submenús anidados

## Configuración en Drupal Admin

### 1. Acceder al Menú Principal

1. Ir a **Administración > Estructura > Menús**
2. Hacer clic en **"Menú principal"**
3. Hacer clic en **"Editar enlaces"**

### 2. Configurar el Menú "Inicio" con Submenús

#### Paso 1: Editar el enlace "Inicio"
- Buscar el enlace "Inicio"
- Hacer clic en **"Editar"**
- Marcar la casilla **"Mostrar como expandido"**
- Guardar

#### Paso 2: Agregar Submenús
Hacer clic en **"Agregar enlace"** y crear los siguientes enlaces:

**Home Page - 1:**
- Título: `Home Page - 1`
- Enlace: `internal:/home-page-1`
- Menú padre: `Inicio`
- Peso: `0`

**Home Page - 2:**
- Título: `Home Page - 2`
- Enlace: `internal:/home-page-2`
- Menú padre: `Inicio`
- Peso: `1`

**Home Page - 3:**
- Título: `Home Page - 3`
- Enlace: `internal:/home-page-3`
- Menú padre: `Inicio`
- Peso: `2`

### 3. Crear las Páginas de Destino

Para que los enlaces funcionen correctamente, crear las páginas correspondientes:

1. Ir a **Administración > Contenido > Agregar contenido > Página básica**
2. Crear las páginas:
   - **Home Page - 1** (ruta: `/home-page-1`)
   - **Home Page - 2** (ruta: `/home-page-2`)
   - **Home Page - 3** (ruta: `/home-page-3`)

### 4. Limpiar Caché

Después de hacer los cambios:
1. Ir a **Administración > Configuración > Rendimiento**
2. Hacer clic en **"Limpiar caché"**

## Estructura del Menú

```
Inicio (expandido)
├── Home Page - 1
├── Home Page - 2
└── Home Page - 3
Oportunidades
Acceso a datos
Temáticas
Acerca de
```

## Personalización

### Cambiar Colores
Los colores del dropdown se pueden personalizar editando el archivo:
`themes/custom/corporate_plus/templates/header/header-observatory.html.twig`

Variables CSS principales:
- `#1e3a8a` - Color principal (azul)
- `#666` - Color de texto
- `#f8f9fa` - Color de fondo al hacer hover

### Agregar Más Submenús
Para agregar más submenús a cualquier elemento:
1. Crear el enlace en Drupal Admin
2. Establecer el "Menú padre" apropiado
3. Limpiar caché

### Modificar Animaciones
Las animaciones se controlan mediante CSS transitions en el archivo del header. Se pueden ajustar:
- Duración de la transición
- Tipo de easing
- Efectos de transformación

## Solución de Problemas

### Los dropdowns no aparecen
1. Verificar que el menú esté marcado como "expandido"
2. Limpiar caché de Drupal
3. Verificar que el JavaScript se esté cargando

### Estilos no se aplican
1. Verificar que el tema esté activo
2. Limpiar caché de CSS
3. Verificar que no haya conflictos con otros estilos

### Problemas en móviles
Los dropdowns se convierten automáticamente en menús colapsables en dispositivos móviles usando Bootstrap.

## Archivos Modificados

- `templates/navigation/menu--observatory.html.twig` - Template del menú
- `templates/header/header-observatory.html.twig` - Estilos CSS
- `js/observatory-dropdown.js` - Funcionalidad JavaScript
- `corporate_plus.libraries.yml` - Registro de librerías
- `config/install/menu_link_content.observatory_menu.yml` - Configuración del menú

## Notas Técnicas

- El sistema utiliza CSS hover y JavaScript para mejor compatibilidad
- Soporte completo para navegación por teclado (Enter, Espacio, Escape)
- Cierre automático al hacer clic fuera del menú
- Compatible con Bootstrap 5
- Accesible según estándares WCAG
