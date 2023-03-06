up:
	@echo "compose up":
	docker-compose -f local.yml up -d

down:
	@echo "compose down":
	docker-compose -f local.yml down --remove-orphans

rebuild:
	@echo "rebuild"
	docker-compose -f local.yml up -d --build

php:
	@echo "local php":
	docker-compose -f local.yml exec php sh
