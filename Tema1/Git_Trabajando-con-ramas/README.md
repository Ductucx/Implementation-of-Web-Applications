# APRENDIENDO SOBRE LAS RAMAS EN GIT

### Índice
  1. [Ejercicio individual](#ejercicios-individuales)
  - 1.1. [Apartado 1: Listar ramas locales](#apartado-1-listar-ramas-locales)
  - 1.2. [Apartado 2: Creación de una nueva rama](#apartado-2-creación-de-una-nueva-rama)
  - 1.3. [Apartado 3: Modificación](#apartado-3-modificación)
  - 1.4. [Apartado 4:Fusión](#apartado-4-fusión)
  - 1.5. [Apartado 5: Conflictos](#apartado-5-conflictos)
  - 1.6. [Apartado 6: Sincronizar repositorio remoto](#apartado-6-sincronizar-repositorio-remoto)
  - 1.7. [Apartado 7: Eliminando la rama](#apartado-7-eliminando-la-rama)

</br>

# EJERCICIOS INDIVIDUALES
## Apartado 1: Listar ramas locales
Para mirar las ramas que tenemos creadas ejecutamos un `git branch`

![alt image ap1](./IMG/apartado1.png)


## Apartado 2: Creación de una nueva rama
Ahora para crear una rama ejecutamos un `git branch "nombre_rama"`.
Una vez creada nos movemos a ella con `git checkout "nombre_rama"`.

![alt image ap1](./IMG/apartado2.png)

*También sirve* `git checkout -b "nombre_rama"` *para crearla y cambiarnos directamente.*

![alt image ap1](./IMG/apartado2-1.png)


## Apartado 3. Modificación
Empezamos a fusionar...

Crearemos un fichero desde la rama que habremos creado y acabaremos con un commit:

![alt image ap1](./IMG/apartado3.png)
![alt image ap1](./IMG/apartado3-1.png)


## Apartado 4: Fusión
Ahora nos vamos a main y fusionamos la rama con `git merge "nombre_rama"`:

![alt image ap1](./IMG/apartado4.png)
![alt image ap1](./IMG/apartado4-1.png)

Si no hay conflictos, todo irá bien.

## Apartado 5: Conflictos
Crearemos a propósito un conflicto para solucionarlo.

Primero crearemos un fichero ***prueba.txt*** en la rama ***main*** y haremos un commit.

![alt image ap1](./IMG/apartado5.png)
![alt image ap1](./IMG/apartado5-1.png)

Cambiamos a una nueva rama, modificamos el fichero y haremos otro commit.

![alt image ap1](./IMG/apartado5-2.png)

Volvemos a la rama ***main***, modificamos el fichero de nuevo y luego intentaremos fusionar la nueva rama.

![alt image ap1](./IMG/apartado5-3.png)

Si surge un conflicto, Git te lo mostrará y podrás resolverlo manualmente.

![alt image ap1](./IMG/apartado5-4.png)


## Apartado 6: Sincronizar repositorio remoto
Para sincronizar con el repositorio remoto, subiremos la rama local con `git push origin "nombre_rama"`:

![alt image ap1](./IMG/apartado6.png)


## Apartado 7: Eliminando la rama
Finalmente, una vez fusionada, la eliminamos para mantener el repositorio limpio utilizando `git branch -d "nombre_rama"`:

![alt image ap1](./IMG/apartado7.png)



#