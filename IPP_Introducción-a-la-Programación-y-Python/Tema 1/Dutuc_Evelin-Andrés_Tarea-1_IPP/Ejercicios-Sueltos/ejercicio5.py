# === Ejercicio 5 ===
print("=====================")
print("==== EJERCICIO 5 ====")
print("=====================")
print()

# || import os || Lo que hace es añadir otro comando que añade la funcionalidad de
# ejecutar a tiempo real, comandos en la terminal dependiendo del sistema, como
# puede ser un cls o clear en caso de linux.
import os

# || import platform || Añade otro comando, que sirve para identificar el sistema en
# el que se encuentra el usuario.
import platform

# || import time || Añade un comando, que sirve para utilizar funciones como "sleep"
# en linux.
import time

# def sirve para declarar funciones, que se pueden aprovechar para definirlas como si
# fuesen variables pero dentro de ellas caben líneas de códigos que pueden ser
# ejecutadas con simplemente escribir el nombre de la función => función()
def limpieza():
    system = platform.system()
    if system == "Windows":
        os.system("cls")
    else:
        os.system("clear")


while True:
    try:
        limpieza()
        print("=====================")
        print("==== EJERCICIO 5 ====")
        print("=====================")
        print()
        num1=int(input("Introduzca un número ENTERO QUE NO SEA 0: "))
        num2=int(input("Ahora el segundo número ENTERO QUE NO SEA 0: "))
        if num1 and num2 != 0:
            print()
            print("Este es el resultado de la división: ", num1/num2, "\n")
            break
        else:
            print()
            print("Ha registrado al menos un 0 en uno de los parámetros, vuelva a intentarlo...")
            time.sleep(3)
    except ValueError:
        print()
        print("Número no válido, vuelva a intentarlo...")
        time.sleep(3)