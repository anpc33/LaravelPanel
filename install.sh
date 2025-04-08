#!/bin/bash

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo "Docker is not installed. Please install Docker first."
    exit 1
fi

# Check if Docker Compose is installed
if ! command -v docker-compose &> /dev/null; then
    echo "Docker Compose is not installed. Please install Docker Compose first."
    exit 1
fi

# Copy .env.example to .env
cp .env.example .env

# Build and start containers
docker-compose up -d --build

# Install PHP dependencies
docker-compose exec app composer install

# Generate application key
docker-compose exec app php artisan key:generate

# Run migrations and seeders
docker-compose exec app php artisan migrate --seed

# Install NPM dependencies and compile assets
docker-compose exec app npm install
docker-compose exec app npm run dev

# Set permissions
docker-compose exec app chmod -R 775 storage bootstrap/cache

echo "Installation completed! You can access the application at http://localhost:8000"
echo "Default admin credentials:"
echo "Email: admin@example.com"
echo "Password: password"
