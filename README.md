# Calculadora de Velocidad

## Descripción
Este programa calcula la velocidad de un móvil considerando diferentes unidades de medida para el espacio (metros o kilómetros) y el tiempo (horas o segundos). El resultado se puede mostrar en km/h o m/s.

## Fórmulas Utilizadas

### 1. Fórmula básica de velocidad:
```
v = d / t
```
Donde:
- v = velocidad
- d = distancia (espacio)
- t = tiempo

### 2. Fórmulas de conversión de unidades:

**Para convertir metros a kilómetros:**
```
km = m / 1000
```

**Para convertir kilómetros a metros:**
```
m = km × 1000
```

**Para convertir segundos a horas:**
```
h = s / 3600
```

**Para convertir horas a segundos:**
```
s = h × 3600
```

**Para convertir m/s a km/h:**
```
km/h = (m/s) × 3.6
```

**Para convertir km/h a m/s:**
```
m/s = (km/h) / 3.6
```

## Datos Necesarios

1. **Distancia/Espacio (d):**
   - Valor numérico positivo
   - Unidad: metros (m) o kilómetros (km)

2. **Tiempo (t):**
   - Valor numérico positivo
   - Unidad: segundos (s) u horas (h)

3. **Unidad de salida deseada:**
   - km/h (kilómetros por hora)
   - m/s (metros por segundo)

## Algoritmo

```
ALGORITMO CalcularVelocidad

INICIO
    // Entrada de datos
    ESCRIBIR "Ingrese la distancia:"
    LEER distancia
    ESCRIBIR "Ingrese la unidad de distancia (m/km):"
    LEER unidad_distancia
    ESCRIBIR "Ingrese el tiempo:"
    LEER tiempo
    ESCRIBIR "Ingrese la unidad de tiempo (s/h):"
    LEER unidad_tiempo
    ESCRIBIR "Ingrese la unidad de salida deseada (m/s o km/h):"
    LEER unidad_salida
    
    // Conversión a unidades base (metros y segundos)
    SI unidad_distancia = "km" ENTONCES
        distancia_metros = distancia * 1000
    SINO
        distancia_metros = distancia
    FIN_SI
    
    SI unidad_tiempo = "h" ENTONCES
        tiempo_segundos = tiempo * 3600
    SINO
        tiempo_segundos = tiempo
    FIN_SI
    
    // Cálculo de velocidad en m/s
    velocidad_ms = distancia_metros / tiempo_segundos
    
    // Conversión a la unidad de salida deseada
    SI unidad_salida = "km/h" ENTONCES
        velocidad_final = velocidad_ms * 3.6
        ESCRIBIR "La velocidad es: ", velocidad_final, " km/h"
    SINO
        velocidad_final = velocidad_ms
        ESCRIBIR "La velocidad es: ", velocidad_final, " m/s"
    FIN_SI
    
FIN
```

## Uso del Programa

### Ejecutar el programa:
```bash
python3 calculadora_velocidad.py
```

### Menú principal:
1. **Calcular velocidad**: Permite ingresar datos y calcular la velocidad
2. **Ver ejemplos de uso**: Muestra ejemplos prácticos
3. **Salir**: Termina el programa

### Ejemplos de uso:

#### Ejemplo 1: Auto en ciudad
- **Datos**: 100 metros en 10 segundos
- **Resultado**: 10 m/s = 36 km/h

#### Ejemplo 2: Viaje en carretera
- **Datos**: 50 kilómetros en 1 hora
- **Resultado**: 13.89 m/s = 50 km/h

#### Ejemplo 3: Caminata
- **Datos**: 200 metros en 0.5 horas (30 minutos)
- **Resultado**: 0.11 m/s = 0.40 km/h

## Características del programa:

- ✅ Validación de datos de entrada
- ✅ Conversión automática entre unidades
- ✅ Manejo de errores
- ✅ Interfaz de menú interactiva
- ✅ Ejemplos prácticos incluidos
- ✅ Resultados en ambas unidades para referencia

## Casos de uso:

1. **Transporte**: Calcular velocidad de vehículos
2. **Deportes**: Velocidad de corredores, ciclistas
3. **Física**: Problemas de cinemática
4. **Ingeniería**: Análisis de movimiento de objetos