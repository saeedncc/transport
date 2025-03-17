# Transport App with Laravel

this application created by laravel backend

## Installation

Require this package with docker using the following command:

in docker folder you use this command
```bash
docker compose ud -d
```


## How to Setup DB with sample data

go to app contaner

```bash
docker exec -it containerid /bin/bash
```

for create tables for this app , please run this command

```bash

 php artisan migrate:fresh --seed
 
```

## Request Rest Api with Swagger

run following command for creating swagger collection 

```bash
php artisan l5-swagger:generate

```
{base_url}/api/documentation

![swagger](https://github.com/saeedncc/transport/blob/master/public/doc.png?raw=true)



