#!/usr/bin/env python3
"""
Calculadora de Velocidad
Calcula la velocidad de un móvil con diferentes unidades de entrada y salida.

Fórmulas utilizadas:
- Velocidad: v = d / t
- Conversión m a km: km = m / 1000
- Conversión km a m: m = km * 1000
- Conversión s a h: h = s / 3600
- Conversión h a s: s = h * 3600
- Conversión m/s a km/h: km/h = (m/s) * 3.6
- Conversión km/h a m/s: m/s = (km/h) / 3.6
"""

def calcular_velocidad():
    """
    Algoritmo principal para calcular la velocidad de un móvil.
    
    Datos necesarios:
    - Distancia: valor numérico en metros (m) o kilómetros (km)
    - Tiempo: valor numérico en segundos (s) u horas (h)
    - Unidad de salida: km/h o m/s
    """
    
    print("=== CALCULADORA DE VELOCIDAD ===")
    print("Este programa calcula la velocidad de un móvil")
    print("con diferentes unidades de entrada y salida.\n")
    
    try:
        # Entrada de datos
        print("ENTRADA DE DATOS:")
        distancia = float(input("Ingrese la distancia: "))
        
        print("Unidades disponibles: m (metros), km (kilómetros)")
        unidad_distancia = input("Ingrese la unidad de distancia (m/km): ").lower().strip()
        
        tiempo = float(input("Ingrese el tiempo: "))
        
        print("Unidades disponibles: s (segundos), h (horas)")
        unidad_tiempo = input("Ingrese la unidad de tiempo (s/h): ").lower().strip()
        
        print("Unidades de salida disponibles: m/s, km/h")
        unidad_salida = input("Ingrese la unidad de salida deseada (m/s o km/h): ").lower().strip()
        
        # Validación de entradas
        if unidad_distancia not in ['m', 'km']:
            raise ValueError("Unidad de distancia no válida. Use 'm' o 'km'.")
        
        if unidad_tiempo not in ['s', 'h']:
            raise ValueError("Unidad de tiempo no válida. Use 's' o 'h'.")
        
        if unidad_salida not in ['m/s', 'km/h']:
            raise ValueError("Unidad de salida no válida. Use 'm/s' o 'km/h'.")
        
        if distancia <= 0 or tiempo <= 0:
            raise ValueError("La distancia y el tiempo deben ser valores positivos.")
        
        print("\nPROCESAMIENTO:")
        
        # Conversión a unidades base (metros y segundos)
        if unidad_distancia == "km":
            distancia_metros = distancia * 1000
            print(f"Conversión: {distancia} km = {distancia_metros} m")
        else:
            distancia_metros = distancia
            print(f"Distancia en metros: {distancia_metros} m")
        
        if unidad_tiempo == "h":
            tiempo_segundos = tiempo * 3600
            print(f"Conversión: {tiempo} h = {tiempo_segundos} s")
        else:
            tiempo_segundos = tiempo
            print(f"Tiempo en segundos: {tiempo_segundos} s")
        
        # Cálculo de velocidad en m/s
        velocidad_ms = distancia_metros / tiempo_segundos
        print(f"Velocidad base: {velocidad_ms:.4f} m/s")
        
        # Conversión a la unidad de salida deseada
        print("\nRESULTADO:")
        if unidad_salida == "km/h":
            velocidad_final = velocidad_ms * 3.6
            print(f"La velocidad es: {velocidad_final:.4f} km/h")
        else:
            velocidad_final = velocidad_ms
            print(f"La velocidad es: {velocidad_final:.4f} m/s")
        
        # Mostrar ambas unidades para referencia
        print("\nPARA REFERENCIA:")
        print(f"Velocidad en m/s: {velocidad_ms:.4f}")
        print(f"Velocidad en km/h: {velocidad_ms * 3.6:.4f}")
        
    except ValueError as e:
        print(f"Error: {e}")
        print("Por favor, ingrese valores válidos.")
    except Exception as e:
        print(f"Error inesperado: {e}")

def ejemplos_de_uso():
    """Función que muestra ejemplos de uso del algoritmo."""
    print("\n=== EJEMPLOS DE USO ===")
    
    ejemplos = [
        {
            "distancia": 100,
            "unidad_distancia": "m",
            "tiempo": 10,
            "unidad_tiempo": "s",
            "descripcion": "Un auto recorre 100 metros en 10 segundos"
        },
        {
            "distancia": 50,
            "unidad_distancia": "km",
            "tiempo": 1,
            "unidad_tiempo": "h",
            "descripcion": "Un vehículo recorre 50 kilómetros en 1 hora"
        },
        {
            "distancia": 200,
            "unidad_distancia": "m",
            "tiempo": 0.5,
            "unidad_tiempo": "h",
            "descripcion": "Una persona camina 200 metros en media hora"
        }
    ]
    
    for i, ejemplo in enumerate(ejemplos, 1):
        print(f"\nEjemplo {i}: {ejemplo['descripcion']}")
        
        # Conversión a metros y segundos
        if ejemplo['unidad_distancia'] == "km":
            distancia_metros = ejemplo['distancia'] * 1000
        else:
            distancia_metros = ejemplo['distancia']
        
        if ejemplo['unidad_tiempo'] == "h":
            tiempo_segundos = ejemplo['tiempo'] * 3600
        else:
            tiempo_segundos = ejemplo['tiempo']
        
        # Cálculo
        velocidad_ms = distancia_metros / tiempo_segundos
        velocidad_kmh = velocidad_ms * 3.6
        
        print(f"  Datos: {ejemplo['distancia']} {ejemplo['unidad_distancia']}, {ejemplo['tiempo']} {ejemplo['unidad_tiempo']}")
        print(f"  Resultado: {velocidad_ms:.4f} m/s = {velocidad_kmh:.4f} km/h")

if __name__ == "__main__":
    while True:
        print("\n" + "="*50)
        print("MENÚ PRINCIPAL")
        print("1. Calcular velocidad")
        print("2. Ver ejemplos de uso")
        print("3. Salir")
        
        opcion = input("\nSeleccione una opción (1-3): ").strip()
        
        if opcion == "1":
            calcular_velocidad()
        elif opcion == "2":
            ejemplos_de_uso()
        elif opcion == "3":
            print("¡Gracias por usar la Calculadora de Velocidad!")
            break
        else:
            print("Opción no válida. Por favor, seleccione 1, 2 o 3.")