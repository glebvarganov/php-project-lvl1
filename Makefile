install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

brain-games:
	./bin/brain-games

validate:
	composer validate