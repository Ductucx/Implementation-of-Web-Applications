# === Ejercicio 5b ===
print("======================")
print("=    EJERCICIO 5b    =")
print("======================")
print()

nombre=str(input("Introduzca su NOMBRE: "))
print("")

print("Hola",nombre+",","vamos a crear tu resumen...")
print("")

fecha=int(input("Introduzca su AÑO DE NACIMIENTO: "))
print("")

edad=2025-fecha

print("Su edad es:",edad)
print("")

comida=str(input("Introduzca su COMIDA FAVORITA: "))
print("")

print(
    "\n*** Tu Resumen Personal ***\n"
    "Nombre: " + nombre + "\n"
    "Año de Nacimiento: " + str(fecha) + "\n"
    "Edad Aproximada: " + str(edad) + "\n"
    "Comida Favorita: " + comida + "\n"
    "****************************"
)