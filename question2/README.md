## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system.

> **Warning:** Make sure port `8002` is free on your computer.

Open a terminal and from this root folder (question2) run `docker-compose up -d`.
Open up your browser of choice to [http://localhost:8002](http://localhost:8002) and you should see the app running.

Containers created and their ports (if used) are as follows:

- **Nginx Container** - `test_gc_nginx_container:8002` 
- **PHP Container** - `test_gc_php_fpm_container`
