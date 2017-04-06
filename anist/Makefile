PWD := $(shell pwd -L)

PHP-TOOLS-IMAGE := daniloterra/php-tools:v1

open-container:
	docker run --rm -it --volume ${PWD}:/app ${PHP-TOOLS-IMAGE}

composer-install:
	docker run --rm --volume ${PWD}:/app ${PHP-TOOLS-IMAGE} composer install

composer-update:
	docker run --rm --volume ${PWD}:/app ${PHP-TOOLS-IMAGE} composer update

phpunit:
	docker run --rm --volume ${PWD}:/app ${PHP-TOOLS-IMAGE} phpunit

phpunit-file:
	docker run --rm --volume ${PWD}:/app ${PHP-TOOLS-IMAGE} phpunit

phpcpd:
	docker run --rm --volume ${PWD}:/app ${PHP-TOOLS-IMAGE} phpcpd
