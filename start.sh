#!/bin/bash

# Create .env-file with default values if it does not exist
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Start the application
echo "Starting docker-compose..."
docker compose up --build -d

# Run migrations
echo "Running migrations..."
docker compose exec app php artisan migrate --force

# Run seeders
echo "Running seeders..."
docker compose exec app php artisan db:seed --force

# Start Laravel server
echo "Starting Laravel..."
docker compose exec app php artisan serve --host=0.0.0.0 --port=8000
