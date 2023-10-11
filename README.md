# manage-cars
Projeto CRUD, sistema de cadastramento de veículos usando laravel e vue js


# inicio do projeto por docker

DOCKER START: \

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

DB_CONNECTION=pgsql \
DB_HOST=pgsql \
DB_PORT=5432 \
DB_DATABASE=manage_cars \
DB_USERNAME=root \
DB_PASSWORD=passws123
