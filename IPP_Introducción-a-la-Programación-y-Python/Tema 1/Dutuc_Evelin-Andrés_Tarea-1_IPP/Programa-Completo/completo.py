nombre=input("Escriba su nombre: ")
print("Bienvenido/a al programa de la unidad 1,", nombre)
print("")

cadena=input("Ahora introduzca una cadena de texto para calcular su longitud: ")
longitud = len(cadena)
print("La longitud es: ",longitud, "caracteres")
print("")

# || import math || añade comandos matemáticos, el ejemplo que se ha utilizado en este caso es math.pi
# genera el número pi.
import math

print("Ahora vamos a calcular el área de un círculo...")
radio=float(input("Introduzca el radio: "))
circulo = math.pi * (radio*2)
print ("El resultado es: ",circulo)