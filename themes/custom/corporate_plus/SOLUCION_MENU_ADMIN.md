# Solución: Menús Editables desde Drupal Admin

## 🎯 **Problema Identificado**

Los menús del header (Inicio, Oportunidades, Acceso a datos, Temáticas, Acerca de) están **hardcodeados** en el template del tema, no son menús dinámicos de Drupal que puedas editar desde la interfaz de administración.

## ✅ **Solución Implementada**

### **1. Cambios Realizados en el Template**

**Archivo modificado:** `themes/custom/corporate_plus/templates/header/header-observatory.html.twig`

**Antes (menú hardcodeado):**
```html
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/oportunidades">Oportunidades</a>
    </li>
    <!-- ... más enlaces hardcodeados ... -->
</ul>
```

**Después (menú dinámico):**
```html
{{ page.primary_menu }}
```

### **2. Template del Menú Creado**

**Archivo creado:** `themes/custom/corporate_plus/templates/navigation/menu--main.html.twig`

```twig
{#
/**
 * @file
 * Template for the main menu.
 */
#}
{% if items %}
  <ul class="navbar-nav">
    {% for item in items %}
      <li class="nav-item">
        <a class="nav-link{{ item.is_active ? ' active' : '' }}" href="{{ item.url }}"{{ item.attributes }}>
          {{ item.title }}
        </a>
      </li>
    {% endfor %}
  </ul>
{% endif %}
```

### **3. Configuración del Bloque Creada**

**Archivo creado:** `themes/custom/corporate_plus/config/install/block.block.primary_menu.yml`

```yaml
langcode: en
status: true
dependencies:
  config:
    - system.menu.main
  module:
    - system
  theme:
    - corporate_plus
id: primary_menu
theme: corporate_plus
region: primary_menu
weight: 0
provider: system
plugin: system_menu_block
settings:
  id: system_menu_block:main
  label: 'Menú principal'
  provider: system
  label_display: '0'
visibility: {  }
```

## 🚀 **Pasos para Activar los Cambios**

### **1. Limpiar Caché**
```bash
# Desde la raíz del proyecto Drupal
drush cr
```

**O desde Drupal Admin:**
- Ve a **Administración > Configuración > Rendimiento**
- Haz clic en **"Limpiar caché"**

### **2. Verificar Configuración del Menú**

1. Ve a **Administración > Estructura > Menús**
2. Haz clic en **"Menú principal"**
3. Verifica que tengas estos enlaces:
   - **Inicio** → `/`
   - **Oportunidades** → `/oportunidades`
   - **Acceso a datos** → `/datos`
   - **Temáticas** → `/tematicas`
   - **Acerca de** → `/acerca-de`

### **3. Verificar Configuración del Bloque**

1. Ve a **Administración > Estructura > Bloques**
2. Busca el bloque **"Menú principal"**
3. Verifica que esté asignado a la región **"Primary menu"**
4. Si no está, haz clic en **"Colocar bloque"** y agrégalo

### **4. Configurar el Tema**

1. Ve a **Administración > Apariencia**
2. Asegúrate de que **"Corporate Plus"** esté activo
3. Si no está activo, haz clic en **"Instalar y establecer como predeterminado"**

## 📝 **Cómo Editar los Menús Ahora**

### **Desde Drupal Admin:**

1. **Administración > Estructura > Menús > Menú principal**
2. Haz clic en **"Editar enlaces"**
3. Aquí podrás:
   - ✅ **Agregar nuevos enlaces**
   - ✅ **Editar enlaces existentes**
   - ✅ **Cambiar el orden** (arrastrar y soltar)
   - ✅ **Eliminar enlaces**
   - ✅ **Crear submenús**

### **Ejemplo de Edición:**

Para agregar un nuevo enlace:
1. Haz clic en **"Agregar enlace"**
2. **Título:** "Nuevo enlace"
3. **Enlace:** `/nueva-pagina`
4. **Guardar**

## 🎨 **Estilos Mantenidos**

Los estilos CSS se mantienen igual:
- **Color:** Gris (#666) con hover azul (#1e3a8a)
- **Tipografía:** Cabin, 0.9rem
- **Espaciado:** 2rem entre elementos
- **Transición:** Suave al hacer hover

## ✅ **Verificación Final**

Después de los cambios, deberías poder:

1. ✅ **Ver los menús en el header** con el mismo estilo
2. ✅ **Editar los menús** desde Drupal Admin
3. ✅ **Agregar/eliminar enlaces** sin tocar código
4. ✅ **Cambiar el orden** arrastrando y soltando
5. ✅ **Crear submenús** si es necesario

## 🔧 **Solución de Problemas**

### **Si los menús no aparecen:**
1. Limpia el caché: `drush cr`
2. Verifica que el bloque esté en la región correcta
3. Verifica que el menú principal tenga enlaces

### **Si los estilos no se aplican:**
1. Verifica que el template `menu--main.html.twig` esté en la carpeta correcta
2. Limpia el caché de CSS: `drush cr`

### **Si hay errores:**
1. Revisa los logs de Drupal
2. Verifica que todos los archivos estén en las ubicaciones correctas
3. Asegúrate de que el tema esté activo

## 📁 **Archivos Modificados**

1. `themes/custom/corporate_plus/templates/header/header-observatory.html.twig`
2. `themes/custom/corporate_plus/templates/navigation/menu--main.html.twig` (nuevo)
3. `themes/custom/corporate_plus/config/install/block.block.primary_menu.yml` (nuevo)

¡Listo! Ahora puedes editar los menús del header desde Drupal Admin sin tocar código. 