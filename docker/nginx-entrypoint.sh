#!/bin/sh
set -e

# Copy theme to actual location after volume mount
mkdir -p /var/www/html/wp-content/themes/koeberg-portfolio
cp -r /usr/src/koeberg-portfolio/* /var/www/html/wp-content/themes/koeberg-portfolio/

# Run nginx
exec nginx -g 'daemon off;'
