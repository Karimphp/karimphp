

1. Crea una base de datos llamada GeoIP.

2. Descarga el CSV GeoLite2 City y GeoLite2 Country del enlace: GeoLite2 Free Downloadable Databases

3. Importa los datos de los archivos CSV:

      Crea una tabla cities_locations con el contenido del archivo GeoLite2-City-Locations-es.csv
      Crea una tabla cities_blocks_ip4 con el contenido del archivo GeoLite2-City-Blocks-IPv4.csv
      Crea una tabla countries_locations con el contenido del archivo GeoLite2-Country-Locations-es.csv
      Crea una tabla countries_blocks_ip4 con el contenido del archivo GeoLite2-Country-Blocks-IPv4.csv

4. Obtén el nombre de la ciudad, la latitud y la longitud a partir del rango de IPs 83.43.204.0/24 y 83.43.1.0/25

Usa el motor adecuado para realizar consultas transaccionales.

Se deben entregar las sentencias SQL utilizadas en un fichero sql y los comandos de terminal en un fichero txt. Todo comprimido en un zip.
