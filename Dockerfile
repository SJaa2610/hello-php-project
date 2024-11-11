# Utilizamos la imagen oficial de PHP 8.1 con Apache como base
FROM php:8.1-apache

# Copiamos el archivo project.php al directorio raíz del servidor web
COPY project.php /var/www/html/index.php

# Exponemos el puerto 80 para acceder a la aplicación
EXPOSE 80