# Detect the operating system
ifeq ($(OS),Windows_NT)
    # For Windows
    SUDO :=
else
    # For Linux and other Unix-like systems
    SUDO := sudo
endif

install:
		$(SUDO) composer install
		$(SUDO) npm install
		

build:
		$(SUDO) npm run build
git_push:
		${SUDO} git add .
		${SUDO} git commit -m "made some changes"
		${SUDO} git push

git_pull:
		${SUDO} git add .
		${SUDO} git commit -m "made some changes"
		${SUDO} git pull
server_setup:
			@echo "migrating...."
			${SUDO} php artisan migrate
			@echo "restarting php engine...."
			${SUDO} systemctl restart php8.1-fpm
			${SUDO} systemctl restart nginx

