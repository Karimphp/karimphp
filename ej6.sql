/*Creamos Base de Datos de GeoIP*/
CREATE DATABASE GeoIP;

/*Decimos que Base de Datos vamos a utilizar*/

USE GeoIP;

/*Creamos la Tabla de cities_locations*/

CREATE TABLE cities_locations (
	geoname_id VARCHAR(30),
	locale_code VARCHAR(30),
	continent_code VARCHAR(30),
	continent_name VARCHAR(100),
	country_iso_code VARCHAR(30),
	country_name VARCHAR(100),
	subdivision_1_iso_code VARCHAR(30),
	subdivision_1_name VARCHAR(50),
	subdivision_2_iso_code VARCHAR(30),
	subdivision_2_name VARCHAR(50),
	city_name VARCHAR(100),
	metro_code VARCHAR(50),
	time_zone VARCHAR(50)
);

/*Crear Tabla cities_blocks_ip4*/

CREATE TABLE cities_blocks_ip4 (
	network VARCHAR(40),
	geoname_id VARCHAR(30),
	registered_country_geoname_id VARCHAR(30),
	represented_country_geoname_id VARCHAR(30),
	is_anonymous_proxy VARCHAR(50),
	is_satellite_provider VARCHAR(50),
	postal_code VARCHAR(50),
	latitude VARCHAR(50),
	longitude VARCHAR(50)
);

/*Creamos la Tabla de countries_locations*/

CREATE TABLE countries_locations (
	geoname_id VARCHAR(30),
	locale_code VARCHAR(30),
	continent_code VARCHAR(50),
	continent_name VARCHAR(100),
	country_iso_code VARCHAR(50),
	country_name VARCHAR(100)
);

/*Creamos la Tabla de countries_blocks_ip4*/

CREATE TABLE countries_blocks_ip4 (
	network VARCHAR(40),
	geoname_id VARCHAR(30),
	registered_country_geoname_id VARCHAR(50),
	represented_country_geoname_id VARCHAR(50),
	is_anonymous_proxy VARCHAR(50),
	is_satellite_provider VARCHAR(50)
);

/*A partir del rango de las IPs 83.43.204.0/24 y 83.43.1.0/25, hacemos query para obtener: nombre, latitud y longitud */

SELECT cities_locations.city_name, cities_blocks_ip4.latitude, cities_blocks_ip4.longitude FROM cities_locations RIGHT JOIN cities_blocks_ip4 ON cities_locations.geoname_id = cities_blocks_ip4.geoname_id WHERE cities_blocks_ip4.network LIKE '83.43.204.%24' OR cities_blocks_ip4.network BETWEEN '83.43.1.0/25' AND '83.43.1.127/25';
