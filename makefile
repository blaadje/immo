docker-bash:
	@docker exec -ti immoDb bash

docker-up:
	cd docker && docker-compose up -d;