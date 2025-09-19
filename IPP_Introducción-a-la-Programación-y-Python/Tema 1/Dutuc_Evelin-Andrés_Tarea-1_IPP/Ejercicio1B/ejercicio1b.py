# === Ejercicio 1b ===
print("======================")
print("=    EJERCICIO 1b    =")
print("======================")
print()

# || import math || añade comandos matemáticos, el ejemplo que se ha utilizado en este caso es math.pi
# genera el número pi.
import math

print("Ahora vamos a calcular el área de un cilíndro...")
radio=float(input("Introduzca el radio: "))
altura=float(input("Introduzca la altura"))
cilindro = math.pi * (radio*2) * altura
print ("El resultado es: ",cilindro)