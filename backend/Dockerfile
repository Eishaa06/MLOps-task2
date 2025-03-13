# Use the official PHP 8.1 CLI image as the base
FROM php:8.1-cli

# Set the working directory inside the container
WORKDIR /usr/src/backend

# Install necessary PHP extensions and dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli && \
    rm -rf /var/lib/apt/lists/*

# Copy all backend files into the container
COPY . .

# Expose the port the backend will run on
EXPOSE 8000

# Command to start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "."]
