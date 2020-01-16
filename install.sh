#!/bin/bash

# Copyright 2019-2020 Julian B. Heuschen

export PATH="~/.yarn/bin/:$PATH"

chmod -R 777 /var/www/html

#if [ ! -f .env ]; then
#  if [ -f ../.env.default ]; then
#    cp ../.env.default .env
#  else
#    cp .env.default .env
#  fi
#fi

composer install --no-dev --optimize-autoloader --no-interaction
yarn install
yarn encore production



php bin/console cache:clear --no-warmup --env=prod
php bin/console doctrine:schema:create

echo "Migrating database..."
php bin/console doctrine:migrations:migrate -q -n
echo "Done."

chmod -R 777 /var/www/html



echo "Files are ready"
