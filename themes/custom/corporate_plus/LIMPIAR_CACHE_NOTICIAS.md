# 🔧 LIMPIAR CACHÉ PARA ACTIVAR LA PLANTILLA DE NOTICIAS

## **PASOS PARA ACTIVAR EL NUEVO DISEÑO:**

### **1. Limpiar Caché de Drupal**
1. Ve a **Administración > Configuración > Rendimiento**
2. Haz clic en **"Limpiar caché"**
3. Confirma la acción

### **2. Verificar que la Plantilla se Aplicó**
1. Ve a tu noticia de prueba: `http://observatory.test/node/116`
2. Deberías ver:
   - ✅ Header del observatorio
   - ✅ Breadcrumb de navegación
   - ✅ Título centrado y estilizado
   - ✅ Imagen con efectos hover
   - ✅ Contenido en caja blanca
   - ✅ Botones de navegación
   - ✅ Footer del observatorio

### **3. Si no se Aplica la Plantilla**
Si el diseño no cambia:

1. **Verificar nombre del archivo:**
   - El archivo debe llamarse: `node--observatory_news.html.twig`
   - Debe estar en: `themes/custom/corporate_plus/templates/node/`

2. **Limpiar caché de Twig:**
   - Ve a **Administración > Configuración > Rendimiento**
   - Marca **"Limpiar caché de Twig"**
   - Haz clic en **"Limpiar caché"**

3. **Verificar permisos:**
   - Asegúrate de que el tema "Corporate Plus" esté activo

## **🎨 CARACTERÍSTICAS DEL NUEVO DISEÑO:**

### **✅ Elementos Incluidos:**
- **Header:** Mismo header que las otras páginas
- **Breadcrumb:** Navegación clara
- **Título:** Centrado y estilizado
- **Fecha:** Badge azul con la fecha
- **Imagen:** Con efectos hover y sombras
- **Contenido:** En caja blanca con sombras
- **Navegación:** Botones para volver y ir al inicio
- **Footer:** Mismo footer que las otras páginas

### **📱 Responsive:**
- Diseño adaptativo para móviles
- Botones apilados en pantallas pequeñas
- Imagen responsive

## **🔍 VERIFICACIÓN:**

Después de limpiar el caché, tu noticia debería verse como las otras páginas del observatorio, con el mismo estilo corporativo y navegación consistente.

¿Ya limpiaste el caché? ¿Cómo se ve ahora la página de la noticia?
