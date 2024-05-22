build:
	docker-compose build

setup:
	docker exec laravel_app sh 'setup.sh'

run:
	docker-compose up -d

stop:
	docker-compose stop
