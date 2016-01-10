Usando como base el entregable de la sesión 7 (entregable: Ciudades y Países por GeoIP), utiliza MVC para separar la lógica de negocio de la lógica de la aplicación y de la vista.

Debes utilizar la siguiente estructura de directorios:

- index.php

- app/

-- Models/

-- Controllers/

-- Views/

- libs/

Puedes utilizar libs para añadir las clases como Database que debe ser agnóstico a la lógica de negocio de la aplicación.

Requisitos:

1. Para ejecutar el programa, se debe utilizar el “dispatcher” index.php.

2. La aplicación deber tener un formulario para poder introducir la IP.

3. Debes utilizar las funciones Filter de php para obtener el dato del formulario.

3. La aplicación debe calcular el número de red a partir de la IP introducida para poder consultar la tabla city_blocks_ip4.

4. Debe aparecer como mínimo la información de nombre de ciudad, país, latitud, longitud y código postal.

Consejos:

    Donde hay más datos de IP es en Estados Unidos, para probar la aplicación utiliza IPs  americanas.
    Puedes utilizar librerías externas para calcular el rango de ip a partir de la IP y mascara de red  (http://archive.ubuntu.com/ubuntu/pool/universe/p/php-net-ipv4/php-net-ipv4_1.3.4.orig.tar.gz)
