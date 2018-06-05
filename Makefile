.PHONY: build
build:
	sudo docker-compose build && \
	sudo docker-compose push
