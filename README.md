# 100% Code Coverage is not enough
This is the example code for the blog post by the same name on [betterdevelopers.de](https://betterdevelopers.de) .

If you have Docker and Docker-Compose installed, you can simply execute the unit tests with:
```bash
docker-compose run php-fpm php /application/vendor/phpunit/phpunit/phpunit --configuration /application/phpunit/config.xml /application/test
```