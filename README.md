## Laravel restful api for pokemon data.


## Built using

1. laravel
2. php
3. guzzle
4. pokeapi.co
5. Bootstrap
6. laravel mix

## local testing

    get a application key: 
    running:
    `php artisan key:generate`

    Then do migration:
    'php artisan migrate`

    Finally turn on task scheduling first by:
    `php artisan pokemon:cron`

    This will run the schedule one time.

    more on scheduling:

    https://laravel.com/docs/8.x/scheduling#introduction

    Then follow these steps:

    1. npm install
    2. npm run dev
    3. php artisan serve or use xampp or any other preference


## Deployment

if you are using a server

use https://laravel.com/docs/8.x/scheduling#running-the-scheduler for guide

and deploy using laravel packages:

https://laravel.com/docs/8.x/deployment

## improvement

- we can do update the pokemon using crud way in table.

- we can delete and add new pokemon functionality as a card


