## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system.

> **Warning:** Make sure port `8001` is free on your computer.

Open a terminal and from this root folder (question1) run `docker-compose up -d`.
Open up your browser of choice to [http://localhost:8001/swagger/index.html](http://localhost:8001/swagger/index.html) and you should see the app running.

> **Info:** You can also use any http request platform such as [Postman](https://www.postman.com/) for api call.

Endpoints:
- Add product `http://localhost:8001/api/products`
- Get a product `http://localhost:8001/api/products/{id}`

Containers created and their ports (if used) are as follows:

- **Dotnet Core Container** - `test_gc_dotnet_core_container:8001`  
