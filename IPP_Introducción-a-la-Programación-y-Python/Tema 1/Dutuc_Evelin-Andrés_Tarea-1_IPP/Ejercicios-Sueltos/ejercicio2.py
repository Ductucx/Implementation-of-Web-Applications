# === Ejercicio 2 ===
print("=====================")
print("==== EJERCICIO 2 ====")
print("=====================")
print()
sevilla="La lluvia en Sevilla es una maravilla."

print("La frase es la siguiente: ", sevilla)
print()
print("Tenemos que ver si contiene lluvia, pura y villa.")

palabras=["lluvia", "pura", "villa"]

print("Por lo que...")
print()

# ----------------------- Separación -----------------------

if palabras[0] in sevilla:
    print(palabras[0], "está en la frase")
else:
    print(palabras[0], "no está en la frase")

# ----------------------- Separación -----------------------

if palabras[1] in sevilla:
    print(palabras[1], "está en la frase")
else:
    print(palabras[1], "no está en la frase")

# ----------------------- Separación -----------------------

if palabras[2] in sevilla:
    print(palabras[2], "está en la frase")
else:
    print(palabras[2], "no está en la frase")