#!/bin/bash

# Path to your Laravel project
PROJECT_PATH="/path/to/your/laravel/project"

# Change to the Laravel project directory
cd $PROJECT_PATH

# Install Composer dependencies (if not already done)
# Uncomment the next line if you need to install/update dependencies
# composer install

# Run Laravel development server on 0.0.0.0:8000 (accessible on all interfaces)
php artisan serve --host=0.0.0.0 --port=8000
