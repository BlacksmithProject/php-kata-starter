composer:
	docker-compose run composer install

phpunit:
	docker-compose run php vendor/bin/phpunit