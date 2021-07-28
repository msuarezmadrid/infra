#!/usr/bin/bash

composer dump-autoload

echo "### composer OK!"

artisan="php artisan"

${artisan} config:clear # remove config cache file 
${artisan} route:clear # remove route cache file 
${artisan} view:cache # compile toda la app blade template 
${artisan} cache:clear # flush app cache

echo "Listo!"