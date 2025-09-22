# Solución Completa de los 3 Casos de Excel

## CASO 1: ANÁLISIS ESTADÍSTICO Y MATEMÁTICO

### Funciones Utilizadas:

1. **=PROMEDIO(H2:H15)** - Calcula el promedio de todos los sueldos
2. **=MAX(H2:H15)** - Encuentra el sueldo máximo
3. **=MIN(H2:H15)** - Encuentra el sueldo mínimo
4. **=MEDIANA(H2:H15)** - Calcula la mediana de los sueldos
5. **=DESVEST(H2:H15)** - Calcula la desviación estándar
6. **=VAR(H2:H15)** - Calcula la varianza
7. **=CONTAR(H2:H15)** - Cuenta el número de empleados
8. **=CONTAR.SI(G2:G15;"Masculino")** - Cuenta empleados por género
9. **=CONTAR.SI(D2:D15;"GDH")** - Cuenta empleados por área
10. **=SUMA(H2:H15)** - Suma total de sueldos

## CASO 2: GENERACIÓN DE CÓDIGOS Y CÁLCULO DE BONIFICACIONES

### Fórmulas Principales:

1. **Código Generado:**
   ```excel
   =IZQUIERDA(A30;1)&DERECHA(B30;4)
   ```
   - Toma la primera letra del código del empleado
   - Concatena con los últimos 4 caracteres del apellido

2. **Bonificación:**
   ```excel
   =SI(E30>20;D30*0.15;D30*0.1)
   ```
   - Si años de servicio > 20: bonificación del 15%
   - Si años de servicio ≤ 20: bonificación del 10%

3. **Descuento:**
   ```excel
   =SI(D30>3000;D30*0.05;0)
   ```
   - Si sueldo > 3000: descuento del 5%
   - Si sueldo ≤ 3000: sin descuento

4. **Sueldo Final:**
   ```excel
   =D30+F30-G30
   ```
   - Sueldo Base + Bonificación - Descuento

## CASO 3: BÚSQUEDAS HORIZONTALES Y ANÁLISIS DE PRODUCCIÓN

### Funciones de Búsqueda:

1. **BUSCARH (Búsqueda Horizontal):**
   ```excel
   =BUSCARH("Norte";B53:D53;2;FALSO)
   ```
   - Busca "Norte" en la primera fila
   - Devuelve el valor de la segunda fila en esa columna

2. **INDICE y COINCIDIR para búsquedas por código:**
   ```excel
   =INDICE(B54:B59;COINCIDIR(B63;F54:F59;0))
   ```
   - COINCIDIR encuentra la posición del código
   - INDICE devuelve el valor de producción correspondiente

3. **Análisis de máximos y mínimos:**
   ```excel
   =INDICE(A54:A59;COINCIDIR(MAX(B54:B59);B54:B59;0))
   ```
   - Encuentra el producto con mayor producción por región

### Funciones Estadísticas Adicionales:

- **=PROMEDIO(B54:D54)** - Promedio de producción por producto
- **=SUMA(B54:B59)** - Total de producción por región
- **=MAX(B54:B59)** - Máxima producción por región
- **=MIN(E54:E59)** - Mínimo promedio de producción

## Instrucciones de Uso:

1. **Importar el archivo CSV** en Excel
2. **Aplicar las fórmulas** en las celdas correspondientes
3. **Verificar los rangos** de datos según tu tabla específica
4. **Ajustar las referencias** si los datos están en diferentes posiciones

## Beneficios de estas soluciones:

- **Automatización completa** de cálculos
- **Escalabilidad** para agregar más empleados o productos
- **Análisis estadístico robusto** con múltiples métricas
- **Búsquedas eficientes** usando códigos
- **Cálculos dinámicos** que se actualizan automáticamente

Las fórmulas están diseñadas para ser **reutilizables** y **adaptables** a diferentes conjuntos de datos.