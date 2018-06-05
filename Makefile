.PHONY: build deploy tunnel wait-for-tunnel
build:
	sudo docker-compose build && \
	sudo docker-compose push

DOCKER_TUNNEL_CONTAINER=docker_swarm_ssh_tunnel
DOCKER_TUNNEL_PORT=12374
DOCKER_SWARM_HOST=174.138.10.79
DEPLOY_USER=root
DOCKER_STACK_FILE=docker-compose.prod.yml
DOCKER_STACK_NAME=clippy

deploy: \
	tunnel
	docker \
		-H localhost:$(DOCKER_TUNNEL_PORT) \
		stack deploy \
		--with-registry-auth \
		-c $(DOCKER_STACK_FILE) \
		--prune \
		$(DOCKER_STACK_NAME)
	docker stop $(DOCKER_TUNNEL_CONTAINER)
	docker rm $(DOCKER_TUNNEL_CONTAINER)

tunnel:
	@(docker ps | grep $(DOCKER_TUNNEL_CONTAINER)) || docker run \
		-d \
		--name $(DOCKER_TUNNEL_CONTAINER) \
		-v ~/.ssh:/root/.ssh \
		-p $(DOCKER_TUNNEL_PORT):$(DOCKER_TUNNEL_PORT) \
		kingsquare/tunnel \
		*:$(DOCKER_TUNNEL_PORT):/var/run/docker.sock \
		$(DEPLOY_USER)@$(DOCKER_SWARM_HOST)

	$(MAKE) wait-for-tunnel

wait-for-tunnel:
	until docker -H localhost:$(DOCKER_TUNNEL_PORT) version 2>/dev/null 1>/dev/null > /dev/null; do \
		echo "Waiting for docker tunnel"; \
		sleep 1; \
	done
