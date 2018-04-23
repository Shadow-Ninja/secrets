#! /bin/bash
docker stop my-running-app
docker rm my-running-app

docker build -t my-php-app ./web/
docker run -d --name my-running-app -p 8089:80 my-php-app