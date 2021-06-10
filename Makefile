
install:
	docker run --rm --interactive --tty --volume $PWD:/app composer install

test:
	docker run --rm --interactive --tty --volume $PWD:/app composer test

tests: test
