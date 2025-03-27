FROM php:8.1-cli

# Instala extensiones necesarias si las vas a usar
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Copia el contenido del proyecto al contenedor
WORKDIR /var/www/html
COPY . .

# Expone el puerto que Render usará
EXPOSE 10000

# Comando que ejecutará tu servidor PHP apuntando a la carpeta public
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
