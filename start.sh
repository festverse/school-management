#!/bin/bash
# Run Laravel migrations securely without wiping existing database
php artisan migrate --force

# Start the Apache server
apache2-foreground