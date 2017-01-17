NAME = tainguyen_www
SHORT_NAME = tainguyen
VERSION = 1.0

.PHONY: start dev_up composer bower dbmigrate

start: composer bower dev_up dbmigrate

ssh:
	docker exec -it ${NAME} /bin/bash

composer:
	rm -rf src/vendor/* && docker run  -e LOCAL_USER_ID=$$(id -u $(USER)) --rm -v $$(pwd)/src:/app ngtrieuvi92/composer composer -vvv install --ignore-platform-reqs

bower:
	rm -rf src/web/bower_components/* && docker run -e LOCAL_USER_ID=$$(id -u $(USER)) --rm -v $$(pwd)/src:/data ngtrieuvi92/nodejs-devtools bower install --ignore-platform-reqs

dbmigrate:
	docker exec -t $(SHORT_NAME)_dev-tools doctrine-migrations migrations:migrate -n

dbmigrate-generate:
	docker exec -t $(SHORT_NAME)_dev-tools doctrine-migrations migrations:generate

dev_up:
	docker-compose up -d

down:
	docker-compose down

dev_up_build:
	docker-compose up --build -d

ps:
	docker-compose ps

logs:
	docker-compose logs -f

stop:
	docker stop $$(docker ps -a -q)

delete:
	docker rm $$(docker ps -a -q)

build:
	./scripts/build.sh;

push:
	./scripts/push.sh;

deploy:
	./scripts/deploy.sh;

notify:
	./scripts/notify.sh;

build-migration:
	./scripts/build-migration.sh;

push-migration:
	./scripts/push-migration.sh;

remote-migration:
	./scripts/remote-migration.sh

pl-export:
	cd patternlab && php core/console --generate && npm run gulp build && npm run gulp export;

pl-docker-export:
	docker run -e LOCAL_USER_ID=$$(id -u $(USER)) --rm -v $$(pwd):/data gcr.geekup.vn:5000/devops/patternlab 
