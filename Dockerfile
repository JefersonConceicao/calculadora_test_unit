FROM php:8.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

RUN apt-get update && apt-get install -y \
    git \
    unzip
    # Baixe e instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer