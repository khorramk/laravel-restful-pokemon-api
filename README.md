## Laravel restful api for pokemon data.


## Built using

1. laravel
2. php
3. guzzle
4. pokeapi.co

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


## deployment

if you are using a server

use https://laravel.com/docs/8.x/scheduling#running-the-scheduler for guide


