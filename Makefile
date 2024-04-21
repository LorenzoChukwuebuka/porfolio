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
git:
		${SUDO} git add .
		${SUDO} git commit -m "made some changes"
		${SUDO} git push