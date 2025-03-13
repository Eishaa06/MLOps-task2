FROM php:8.1-cli

WORKDIR /usr/src/backend

RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli && \
    rm -rf /var/lib/apt/lists/*

COPY . .

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "."]
