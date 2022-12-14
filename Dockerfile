FROM php:8.0.1-apache-buster

ARG user
ARG uid

RUN docker-php-ext-install pdo pdo_mysql bcmath opcache 

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev
RUN docker-php-ext-install zip

RUN curl -sL https://deb.nodesource.com/setup_14.x| bash -
RUN apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite

COPY vhost.conf /etc/apache2/sites-available

RUN a2ensite vhost.conf
RUN service apache2 restart

WORKDIR /var/www/html/

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

USER $user
