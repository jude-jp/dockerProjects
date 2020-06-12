docker container run -d -P --name mysqldb -v `pwd`/php/app/random-named-helloworld/db/init/:/docker-entrypoint-initdb.d/ -v /Users/jude/docker/db/mysql/data:/var/lib/mysql mysql:base

docker run -d --link mysqldb:db -p 8081:80 phpmyadmin:base

docker run -d -p 8080:80 --link mysqldb:db --name random-named-helloworld helloworld-db:base