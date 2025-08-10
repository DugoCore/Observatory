# Crear Hero del Observatorio Manualmente

## 🚨 **Si el bloque "Hero del Observatorio" NO aparece**

### **Paso 1: Crear el Tipo de Bloque**
1. Ve a **Administración > Estructura > Tipos de bloque**
2. Haz clic en **"Agregar tipo de bloque"**
3. **ID:** `observatory_hero`
4. **Etiqueta:** `Hero del Observatorio`
5. **Descripción:** `Bloque para el hero section del Observatorio`
6. Haz clic en **"Guardar"**

### **Paso 2: Agregar Campos al Tipo de Bloque**
1. En el tipo de bloque creado, haz clic en **"Gestionar campos"**
2. Haz clic en **"Agregar campo"**
3. **Agregar estos campos:**

#### **Campo 1: Título**
- **Etiqueta:** `Título`
- **Nombre de máquina:** `title`
- **Tipo:** `Texto (formato simple)`
- **Configuración:** Máximo 255 caracteres

#### **Campo 2: Descripción**
- **Etiqueta:** `Descripción`
- **Nombre de máquina:** `description`
- **Tipo:** `Texto (formato largo)`
- **Configuración:** Máximo 1000 caracteres

#### **Campo 3: Imagen de Fondo**
- **Etiqueta:** `Imagen de fondo`
- **Nombre de máquina:** `background_image`
- **Tipo:** `Texto (formato simple)`
- **Configuración:** Máximo 255 caracteres

#### **Campo 4: Texto Destacado**
- **Etiqueta:** `Texto destacado`
- **Nombre de máquina:** `highlight_text`
- **Tipo:** `Texto (formato simple)`
- **Configuración:** Máximo 100 caracteres

### **Paso 3: Crear el Bloque**
1. Ve a **Administración > Estructura > Bloques**
2. Haz clic en **"Agregar bloque de contenido"**
3. Selecciona **"Hero del Observatorio"**
4. **Título del bloque:** `Hero del Observatorio`
5. **Llenar los campos:**
   - **Título:** `Observatorio de Cambio Climático`
   - **Descripción:** `Iniciativa del Ministerio de Medio Ambiente y Recursos Naturales (MARN) con el objetivo de centralizar toda la información asociada con el Cambio Climático que corresponde a El Salvador.`
   - **Imagen de fondo:** `/themes/custom/corporate_plus/css/images/Reserva.jpg`
   - **Texto destacado:** `información`
6. Haz clic en **"Guardar"**

### **Paso 4: Colocar el Bloque**
1. En **Administración > Estructura > Bloques**
2. Busca **"Hero del Observatorio"**
3. Haz clic en **"Configurar bloque"**
4. **Región:** Selecciona **"Hero Section"**
5. Haz clic en **"Guardar bloque"**

### **Paso 5: Limpiar Caché**
1. Ve a **Administración > Configuración > Rendimiento**
2. Haz clic en **"Limpiar caché"**

## ✅ **Resultado Esperado**

Después de estos pasos, deberías poder:
- ✅ **Ver el bloque** en Administración > Estructura > Bloques
- ✅ **Editar el contenido** desde Drupal Admin
- ✅ **Ver el hero editable** en la página principal

## 🔍 **Verificación**

1. Ve a la **página principal** de tu sitio
2. El hero debería verse **exactamente igual** que antes
3. Ve a **Administración > Estructura > Bloques**
4. Busca **"Hero del Observatorio"** y haz clic para editarlo
5. Deberías poder cambiar el título, descripción, imagen y texto destacado 