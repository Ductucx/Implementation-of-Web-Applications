# Tarea 1: LAMP

1. [Apache2](#apache2)
2. [MySQL](#mysql)
3. [PHP](#php)
4. [PHPMyAdmin](#phpmyadmin)
5. [GoAcces](#goacces)

<br/>


## Apache2

En primer lugar, instalamos apache con un `sudo apt install apache2` :

![alt image](./IMG/captura1-1.png)

Para asegurarnos que iniciará cada vez que entremos en nuestra máquina, ejecutamos `sudo apt install apache2` :

![alt image](./IMG/captura1-2.png)

He aquí una pequeña explicación sobre el funcionamiento de los diferentes archivos y directorios de apache2.

![alt image](./IMG/captura1-3.png)

Y ya por último, si hemos instalado e iniciado el servidor apache2, podremos acceder a la página principal desde el navegador web.

Introducimos `http://ip_servidor` o `http://localhost`

![alt image](./IMG/captura1-4.png)

## MySQL

Para la instalación de mysql, ejecutamos `sudo apt install mysql-server` .

![alt image](./IMG/captura2-1.png)

Ahora podremos acceder mediante root con el siguiente comando: `sudo mysql -u root -p`

![alt image](./IMG/captura2-2.png)

Una vez dentro, creamos nuestra base de datos de Terraformadores.

![alt image](./IMG/captura2-3.png)

![alt image](./IMG/captura2-4.png)

## PHP

Lo siguiente que vamos a instalar es php.

`sudo apt install php libapache-mod-php php-mysql`


![alt image](./IMG/captura3-1.png)

Una vez instalado, si deseamos ver la verison de php ejecutamos `php -v` .

![alt image](./IMG/captura3-2.png)

Ahora, para probar que funciona nuestro php, vamos a `/var/www/html` y creamos el archivo `info.php` .

Dentro de el escribimos las siguientes líneas:

***phpinfo()*** *muestra información de la versión instalada del php y el sistema.*

![alt image](./IMG/captura3-3.png)

Hacemos un `sudo systemctl restart apache2` para que funcione y accedemos a la web escribiendo `http://ip_servidor/info.php` .

![alt image](./IMG/captura3-4.png)

Finalmente, creamos un archivo php para establecer la conexión con la base de datos:

![alt image](./IMG/captura3-5.png)

Nos conectamos por la web mediante `http://ip_servidor/nombre_archivo` :

![alt image](./IMG/captura3-6.png)

## PHPMyAdmin

Seguimos con PHPMyAdmin. La instalación consta de la siguiente línea:

`sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl`

![alt image](./IMG/captura4-1.png)

Para poder seguir adelante sin errores, seleccionamos la opción "**Si**":

![alt image](./IMG/captura4-2.png)

Introducimos la contraseña:

![alt image](./IMG/captura4-3.png)

Nos saldrá una ventanita de la instalación, seleccionamos apache 2 **CON LA BARRA ESPACEADORA**, luego pulsamos **Enter**:

![alt image](./IMG/captura4-4.png)

**ATENCIÓN!!!**

Si se da el caso de que aparezca el siguiente error, a continuación se explicará como solucionarlo. De lo contrario seguir hasta el final de la [instalación de PHP](#acceso-a-la-web).

![alt image](./IMG/captura4-5.png)

Una vez haya salido el error, interrumpimos el programa, seleccionando **Aceptar>Interrumpir** .

Después accedemos a nuestro **mysql** con `sudo mysql` y ejecutamos el siguiente comando:

```sql
UNINSTALL COMPONENT "file://component_validate_password";
```

![alt image](./IMG/captura4-6.png)

Salimos de nuestro **mysql** y volvemos a instalar **PHPMyAdmin**.

![alt image](./IMG/captura4-7.png)

Ahora, la instalación no dará problemas...

Para dejar todo como estaba, volvemos a entrar en **mysql** y vovlemos a instalar lo que hemos desinstalado anteriormente:

```sql
INSTALL COMPONENT "file://component_validate_password";
```

![alt image](./IMG/captura4-8.png)

### Acceso a la web

**UNA VEZ INSTALADO TODO**, nos podremos conectar con `http://ip_servidor/phpmyadmin` .

![alt image](./IMG/captura4-9.png)

## GoAcces

Por último, instalaremos una herramienta para los logs de nuestro servidor web. Para ello instalaremo el servicio **GoAcces** con el comando `sudo apt-get install goacces` .

![alt image](./IMG/captura5-1.png)

Hay varias formas de acceder a los logs. Una de ellas es por terminal, que para poder verlo tendremos que escribir el comando `sudo goaccess /var/log/apache2/access.log -c`

Nos pedirá el formato de fecha y hora. Podremos seleccionar la primera opción ***NCSA Combined Log Format*** o ***Common Log Format (CLF)***.

![alt image](./IMG/captura5-2.png)

Y este sería el método por terminal.

![alt image](./IMG/captura5-3.png)

La otra forma para verlo es desde un archivo **html** que lo podremos consultar **A TIEMPO REAL** desde la web ejecutando el siguiente comando:

```sh
sudo goaccess /var/log/apache2/access.log -o /var/www/html/report.html –log-format= COMBINED –real-time-html
```

Y accedemos a la web de la siguiente manera: 

`http://ip_servidor/report.html`

![alt image](./IMG/captura5-4.png)

Con esto habremos instalado y configurado completamente **LAMP**.