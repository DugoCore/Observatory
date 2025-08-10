# Gráficas del Observatorio de Cambio Climático

## Características de las Gráficas

### Gráfica de Barras (Revenue Per Month)
- **Tipo**: Gráfica de barras verticales
- **Colores**: 
  - Barras normales: `#d1d5db` (gris claro)
  - Barra destacada: `#1e3a8a` (azul corporativo)
- **Animaciones**: 
  - Entrada escalonada de barras
  - Hover con escala y cambio de color
- **Etiquetas**: Meses del año (Jan-Dec)
- **Responsive**: Se adapta a diferentes tamaños de pantalla

### Gráfica de Líneas (Sales Statistics)
- **Tipo**: Gráfica de líneas con área sombreada
- **Colores**:
  - Línea: Gradiente azul (`#1e3a8a` a `#3b82f6`)
  - Área: Gradiente transparente
  - Punto destacado: `#3b82f6` con borde blanco
- **SVG**: Renderizado vectorial para mejor calidad
- **Etiquetas**: Números de referencia (3, 6, 9, 12, 15)

## Estructura HTML

### Gráfica de Barras
```html
<div class="chart-container">
  <div class="chart-header">
    <h3 class="chart-title">Revenue Per Month</h3>
    <div class="chart-controls">
      <button class="btn btn-sm btn-chart active">Chart</button>
      <button class="btn btn-sm btn-chart">Table</button>
    </div>
  </div>
  <div class="chart-placeholder bar-chart-placeholder">
    <div class="chart-bars">
      <div class="bar-chart-bar" style="height: 40%;"></div>
      <!-- ... más barras ... -->
      <div class="bar-chart-bar bar-chart-bar-highlighted" style="height: 100%;">
        <span class="bar-chart-label">23.8%</span>
      </div>
    </div>
    <div class="chart-labels">
      <span>Jan</span><span>Feb</span><!-- ... más meses ... -->
    </div>
  </div>
</div>
```

### Gráfica de Líneas
```html
<div class="chart-container">
  <div class="chart-header">
    <div class="chart-title-large">152,569</div>
    <p class="chart-subtitle">Sales Statistics</p>
    <div class="chart-controls">
      <button class="btn btn-sm btn-chart active">Chart</button>
      <button class="btn btn-sm btn-chart">Table</button>
    </div>
  </div>
  <div class="chart-placeholder line-chart-placeholder">
    <svg width="100%" height="100%" viewBox="0 0 400 250">
      <!-- Definiciones de gradientes -->
      <polyline class="line-chart-area" fill="url(#areaGradient)" points="..."/>
      <polyline class="line-chart-line" stroke="url(#lineGradient)" points="..."/>
      <circle class="line-chart-point" cx="250" cy="100" r="6"/>
      <text class="line-chart-label" x="250" y="80">23.8%</text>
    </svg>
    <div class="chart-labels">
      <span>3</span><span>6</span><span>9</span><span>12</span><span>15</span>
    </div>
  </div>
</div>
```

## Personalización

### Cambiar Colores
```css
/* Cambiar color de barras normales */
.bar-chart-bar {
  background-color: #tu-color;
}

/* Cambiar color de barra destacada */
.bar-chart-bar-highlighted {
  background-color: #tu-color-destacado;
}

/* Cambiar gradiente de línea */
#lineGradient stop-color {
  stop-color: #tu-color-inicio;
}
```

### Cambiar Datos
Para cambiar los datos de las gráficas:

1. **Gráfica de Barras**: Modificar los valores `height` en las clases `bar-chart-bar`
2. **Gráfica de Líneas**: Modificar los puntos en el atributo `points` del SVG
3. **Etiquetas**: Cambiar el contenido de los elementos `<span>` en `chart-labels`

### Agregar Interactividad
```javascript
// Ejemplo de interactividad con JavaScript
document.querySelectorAll('.bar-chart-bar').forEach(bar => {
  bar.addEventListener('click', function() {
    // Mostrar tooltip con datos
    console.log('Barra clickeada:', this.style.height);
  });
});
```

## Responsive Design

### Breakpoints
- **Desktop**: > 1200px - Gráficas completas
- **Tablet**: 768px - 1199px - Gráficas adaptadas
- **Mobile**: < 768px - Gráficas compactas

### Adaptaciones Móviles
- Barras más delgadas (14px vs 18px)
- Etiquetas más pequeñas
- Controles reorganizados
- Títulos más pequeños

## Accesibilidad

### Características de Accesibilidad
- Contraste de colores adecuado
- Etiquetas descriptivas
- Navegación por teclado
- Texto alternativo para elementos gráficos

### Mejoras Sugeridas
- Agregar `aria-label` a las barras
- Incluir descripciones para lectores de pantalla
- Agregar navegación por teclado
- Implementar modo de alto contraste

## Rendimiento

### Optimizaciones
- SVG vectorial para escalabilidad
- CSS animations para mejor rendimiento
- Lazy loading para gráficas complejas
- Compresión de assets

### Monitoreo
- Tiempo de carga de gráficas
- Uso de memoria
- Rendimiento en dispositivos móviles 