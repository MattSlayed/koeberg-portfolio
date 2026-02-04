#!/bin/bash
set -e

# Copy theme to actual location after volume mount
mkdir -p /var/www/html/wp-content/themes/koeberg-portfolio
cp -r /usr/src/koeberg-portfolio/* /var/www/html/wp-content/themes/koeberg-portfolio/
chown -R www-data:www-data /var/www/html/wp-content/themes/koeberg-portfolio

# Run original WordPress entrypoint
exec docker-entrypoint.sh "$@"
