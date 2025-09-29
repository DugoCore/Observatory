// ALGORITMO PARA CALCULAR LA VELOCIDAD DE UN MÓVIL
// Autor: Asistente IA
// Fecha: 29/09/2025

// FÓRMULAS UTILIZADAS:
// 1. Velocidad básica: v = d / t
// 2. Conversiones de unidades:
//    - Metros a kilómetros: km = m / 1000
//    - Kilómetros a metros: m = km * 1000
//    - Horas a segundos: s = h * 3600
//    - Segundos a horas: h = s / 3600
// 3. Conversiones de velocidad:
//    - m/s a km/h: km/h = (m/s) * 3.6
//    - km/h a m/s: m/s = (km/h) / 3.6

// DATOS NECESARIOS:
// - Distancia recorrida (valor numérico)
// - Unidad de distancia (metros o kilómetros)
// - Tiempo transcurrido (valor numérico)
// - Unidad de tiempo (horas o segundos)
// - Unidad de velocidad deseada para el resultado (km/h o m/s)

Algoritmo CalcularVelocidadMovil
    // Declaración de variables
    Definir distancia, tiempo, velocidad Como Real
    Definir unidad_distancia, unidad_tiempo, unidad_resultado Como Caracter
    Definir distancia_metros, tiempo_segundos Como Real
    Definir velocidad_ms, velocidad_kmh Como Real
    
    // Presentación del programa
    Escribir "================================================"
    Escribir "    CALCULADORA DE VELOCIDAD DE UN MÓVIL"
    Escribir "================================================"
    Escribir ""
    
    // Entrada de datos
    Escribir "Ingrese la distancia recorrida:"
    Leer distancia
    
    Escribir "Ingrese la unidad de distancia (m para metros, km para kilómetros):"
    Leer unidad_distancia
    
    Escribir "Ingrese el tiempo transcurrido:"
    Leer tiempo
    
    Escribir "Ingrese la unidad de tiempo (h para horas, s para segundos):"
    Leer unidad_tiempo
    
    Escribir "¿En qué unidad desea el resultado? (kmh para km/h, ms para m/s):"
    Leer unidad_resultado
    
    // Validación de datos de entrada
    Si distancia <= 0 O tiempo <= 0 Entonces
        Escribir "Error: La distancia y el tiempo deben ser valores positivos."
    SiNo
        // Conversión de distancia a metros
        Si unidad_distancia = "m" O unidad_distancia = "M" Entonces
            distancia_metros = distancia
        SiNo
            Si unidad_distancia = "km" O unidad_distancia = "KM" Entonces
                distancia_metros = distancia * 1000  // km a metros
            SiNo
                Escribir "Error: Unidad de distancia no válida. Use 'm' o 'km'."
                distancia_metros = -1
            FinSi
        FinSi
        
        // Conversión de tiempo a segundos
        Si unidad_tiempo = "s" O unidad_tiempo = "S" Entonces
            tiempo_segundos = tiempo
        SiNo
            Si unidad_tiempo = "h" O unidad_tiempo = "H" Entonces
                tiempo_segundos = tiempo * 3600  // horas a segundos
            SiNo
                Escribir "Error: Unidad de tiempo no válida. Use 'h' o 's'."
                tiempo_segundos = -1
            FinSi
        FinSi
        
        // Cálculo de velocidad si las conversiones fueron exitosas
        Si distancia_metros > 0 Y tiempo_segundos > 0 Entonces
            // Calcular velocidad en m/s
            velocidad_ms = distancia_metros / tiempo_segundos
            
            // Calcular velocidad en km/h
            velocidad_kmh = velocidad_ms * 3.6
            
            // Mostrar resultados
            Escribir ""
            Escribir "================================================"
            Escribir "                 RESULTADOS"
            Escribir "================================================"
            Escribir "Datos de entrada:"
            Escribir "- Distancia: ", distancia, " ", unidad_distancia
            Escribir "- Tiempo: ", tiempo, " ", unidad_tiempo
            Escribir ""
            Escribir "Conversiones realizadas:"
            Escribir "- Distancia en metros: ", distancia_metros, " m"
            Escribir "- Tiempo en segundos: ", tiempo_segundos, " s"
            Escribir ""
            Escribir "Velocidades calculadas:"
            Escribir "- Velocidad en m/s: ", velocidad_ms, " m/s"
            Escribir "- Velocidad en km/h: ", velocidad_kmh, " km/h"
            Escribir ""
            
            // Mostrar resultado en la unidad solicitada
            Si unidad_resultado = "ms" O unidad_resultado = "MS" Entonces
                Escribir "RESULTADO FINAL: ", velocidad_ms, " m/s"
            SiNo
                Si unidad_resultado = "kmh" O unidad_resultado = "KMH" Entonces
                    Escribir "RESULTADO FINAL: ", velocidad_kmh, " km/h"
                SiNo
                    Escribir "Unidad de resultado no válida. Mostrando ambas:"
                    Escribir "- En m/s: ", velocidad_ms, " m/s"
                    Escribir "- En km/h: ", velocidad_kmh, " km/h"
                FinSi
            FinSi
            
            Escribir "================================================"
        FinSi
    FinSi
    
    Escribir ""
    Escribir "Presione una tecla para continuar..."
    Esperar Tecla
    
FinAlgoritmo