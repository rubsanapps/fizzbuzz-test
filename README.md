# Fizz Buzz test #

## How to start ## 

- Clone this repository

## Dependencies ## 

- Install backend dependencies from backend directory.

```
cd backend
```

```
composer install
```

### How to run services ###

```
docker-compose up
```

Then http://localhost:80 and http://localhost:8080 services will be available.

Documentation will be accesible from http://localhost:8080/docs

```
docker-compose run tests
```

Then test will run.

```
docker-compose run docs
```

Then documentation will regenerate.

## What's included in this repo ##

A docker-compose.yml file that runs four services:

- Backend: a PHP server
- Frontend: an Apache server
- Tests: Unit testing
- Docs: to generate documentation

## 



