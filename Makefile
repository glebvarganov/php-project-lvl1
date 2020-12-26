install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

validate:
	composer validate