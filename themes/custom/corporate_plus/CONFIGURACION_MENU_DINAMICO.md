# 🔧 Configuración del Menú Dinámico - Observatorio

## 🎯 **Sistema Implementado**

Se ha implementado un sistema de menús dropdown **dinámico** que se conecta directamente con el menú configurado en Drupal Admin (`admin/structure/menu/manage/main`). Esto significa que cualquier cambio que hagas en el admin se reflejará automáticamente en el header.

## 📋 **Pasos de Configuración**

### 1. **Acceder al Menú Principal**

1. Ir a **Administración > Estructura > Menús**
2. Hacer clic en **"Menú principal"**
3. Hacer clic en **"Editar enlaces"**

### 2. **Configurar la Estructura del Menú**

#### **Estructura Recomendada:**

```
Inicio (expandido)
├── Home Page - 1
├── Home Page - 2
└── Home Page - 3

Oportunidades (expandido)
├── The Company
└── Company History

Acceso a datos (expandido)
├── Team
└── Team Details

Temáticas (expandido)
├── Style 1
└── Style 2

Acerca de (expandido)
├── Style 1
└── Style 2
```

### 3. **Configurar Cada Menú Principal**

#### **Para "Inicio":**
1. **Editar** el enlace "Inicio"
2. **Marcar** "Mostrar como expandido" ✅
3. **Guardar**

#### **Para "Oportunidades":**
1. **Editar** el enlace "Oportunidades"
2. **Marcar** "Mostrar como expandido" ✅
3. **Guardar**

#### **Para "Acceso a datos":**
1. **Editar** el enlace "Acceso a datos"
2. **Marcar** "Mostrar como expandido" ✅
3. **Guardar**

#### **Para "Temáticas":**
1. **Editar** el enlace "Temáticas"
2. **Marcar** "Mostrar como expandido" ✅
3. **Guardar**

#### **Para "Acerca de":**
1. **Editar** el enlace "Acerca de"
2. **Marcar** "Mostrar como expandido" ✅
3. **Guardar**

### 4. **Agregar Submenús**

#### **Para cada menú principal, agregar sus submenús:**

**Ejemplo para "Oportunidades":**
1. Hacer clic en **"Agregar enlace"**
2. **Título**: `The Company`
3. **Enlace**: `internal:/oportunidades/company`
4. **Menú padre**: `Oportunidades`
5. **Peso**: `0`
6. **Guardar**

7. Hacer clic en **"Agregar enlace"**
8. **Título**: `Company History`
9. **Enlace**: `internal:/oportunidades/history`
10. **Menú padre**: `Oportunidades`
11. **Peso**: `1`
12. **Guardar**

### 5. **Verificar el Bloque del Menú**

1. Ir a **Administración > Estructura > Bloques**
2. Buscar **"Menú principal"**
3. Verificar que esté en la región **"primary_menu"**
4. Si no está, hacer clic en **"Colocar bloque"**
5. Seleccionar **"Menú principal"**
6. **Región**: `primary_menu`
7. **Guardar**

## 🎨 **Características del Sistema**

### ✅ **Funcionalidades Automáticas:**
- **Dropdowns automáticos** para elementos con submenús
- **Iconos de flecha** aparecen automáticamente
- **Animaciones CSS** aplicadas automáticamente
- **Hover effects** funcionan sin configuración adicional

### ✅ **Gestión Dinámica:**
- **Agregar submenús** → Aparecen automáticamente en dropdown
- **Eliminar submenús** → Desaparecen automáticamente
- **Cambiar títulos** → Se actualizan automáticamente
- **Reordenar elementos** → Se refleja automáticamente

## 🔧 **Configuración Técnica**

### **Template Utilizado:**
- `templates/navigation/menu--main.html.twig`
- Renderiza el menú configurado en Drupal Admin
- Aplica automáticamente las clases CSS para dropdowns

### **CSS Aplicado:**
- Los estilos están en `header-observatory.html.twig`
- Se aplican automáticamente a todos los elementos del menú
- No requiere configuración adicional

### **JavaScript:**
- `js/observatory-dropdown.js`
- Maneja eventos de hover y click
- Funciona automáticamente con cualquier estructura de menú

## 📝 **Ejemplos de Configuración**

### **Menú "Inicio":**
```
Título: Inicio
Enlace: internal:/
Mostrar como expandido: ✅
Menú padre: (ninguno)
Peso: 0
```

### **Submenú "Home Page - 1":**
```
Título: Home Page - 1
Enlace: internal:/home-page-1
Mostrar como expandido: ❌
Menú padre: Inicio
Peso: 0
```

### **Submenú "Home Page - 2":**
```
Título: Home Page - 2
Enlace: internal:/home-page-2
Mostrar como expandido: ❌
Menú padre: Inicio
Peso: 1
```

## ✅ **Verificación**

### **Para Verificar que Funciona:**
1. **Configurar** el menú en Drupal Admin
2. **Limpiar caché**: `vendor/bin/drush cache:rebuild`
3. **Visitar** la página principal
4. **Pasar el mouse** sobre los menús principales
5. **Verificar** que aparecen los dropdowns

### **Si No Funciona:**
1. **Verificar** que el menú principal está marcado como "expandido"
2. **Verificar** que el bloque está en la región `primary_menu`
3. **Limpiar caché** de Drupal
4. **Revisar** que los submenús tienen "Menú padre" configurado

## 🎉 **Ventajas del Sistema Dinámico**

### **Para Administradores:**
- ✅ **Gestión visual** en Drupal Admin
- ✅ **Cambios en tiempo real** sin tocar código
- ✅ **Interfaz familiar** de Drupal
- ✅ **Permisos y roles** integrados

### **Para Desarrolladores:**
- ✅ **Código limpio** y mantenible
- ✅ **Separación de contenido y presentación**
- ✅ **Reutilización** de componentes
- ✅ **Escalabilidad** del sistema

## 🚀 **Próximos Pasos**

1. **Configurar** el menú en Drupal Admin
2. **Crear** las páginas de destino para los submenús
3. **Probar** la funcionalidad de dropdowns
4. **Personalizar** colores y estilos si es necesario

¡El sistema está listo para usar y se adaptará automáticamente a cualquier cambio que hagas en el menú!
