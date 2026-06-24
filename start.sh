#!/bin/bash
# Run Laravel migrations securely
php artisan migrate:fresh --seed --force

# Start the Apache server
apache2-foreground