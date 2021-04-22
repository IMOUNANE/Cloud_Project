FROM php:8.0.3-cli

RUN apt-get update && apt-get install -y curl && \
  curl -sS https://getcomposer.org/installer | php \
  && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer

WORKDIR /usr/src/cloud_project

  COPY . .

#COPY ../../composer.json ../../composer.lock ./../../
RUN composer install 
RUN composer dump

WORKDIR /usr/src/cloud_project/src

CMD [ "php", "index.php" ]