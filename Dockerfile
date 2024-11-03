FROM wendyourway/laravel-docker:latest
LABEL maintainer Mark <chumheramis@gmail.com>

# Install Composer
RUN apt install php-cli unzip
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN apt-get update
# Install 7Zip
RUN apt-get install -y p7zip-full
RUN apt-get -y autoremove
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY --chown=sail . /var/www/html
COPY ./resources/docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
EXPOSE 80
