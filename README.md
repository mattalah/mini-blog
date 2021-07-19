
# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)



Clone the repository

    git clone git clone git@github.com:mattalah/mini-blog.git

Switch to the repo folder

    cd mini-blog

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Generate a new passport authentication secret key

    php artisan passport:install

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000/blog

**TL;DR command list**

    git clone git@github.com:mattalah/mini-blog.git
    cd mini-blog
    composer install
    cp .env.example .env
    php artisan passport:install
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

  


## Folders

- `app` - Contains all the Eloquent models
- `config` - Contains all the application configuration files
- `database/migrations` - Contains all the database migrations
- `routes` - Contains all the api and web routes 

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing API

Run the laravel development server

    php artisan serve

The web app can now be accessed at

    http://localhost:8000/blog


