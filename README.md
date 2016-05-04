# CakePHP 3 Demo Project

This is a basic demo project that exposes a RESTful API for yummy cakes.

## Installation ##
This project uses Composer to install dependencies. Migration and seeder files are include.

```
git clone https://github.com/SeanStewart37/cake.git
cd cake
composer install
(configure your database settings)
bin/cake migrations migrate
bin/cake migrations seed

```

## REST Endpoints ##
There's an included Postman collection file.


**Cakes Endpoint**
```
GET /cakes
GET /cakes/:id
PUT /cakes/:id
POST /cakes
DELETE /cakes/:id
```