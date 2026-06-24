#!/bin/bash
# Run Laravel migrations securely without wiping existing database
php artisan migrate --force

# Run database seeder to ensure default accounts always exist in ephemeral containers
php artisan db:seed --force || true

# Start the Apache server
apache2-foreground