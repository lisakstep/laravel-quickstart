FROM php:7.1.8-apache
WORKDIR /var/www

# install system dependencies
RUN apt-get update && apt-get -y install wget git zip
RUN docker-php-ext-install mbstring pdo pdo_mysql

# install composer
COPY .docker/install-composer.sh /tmp/
RUN /tmp/install-composer.sh

# copy config files
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# copy app and install dependencies
COPY . /var/www
RUN mkdir -p /var/www/.composer && chown -R www-data:www-data /var/www /var/www/.composer/
USER www-data
RUN composer install

# serve app by default; probably will be overridden by docker-compose.yml
EXPOSE 8080
CMD php artisan serve --host=0.0.0.0 --port=8080
