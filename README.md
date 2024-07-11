# Assignment

 This is an empty Laravel with Jetstream have 2 step auth and role option (root, admin, user) using bootstrap blade (Laravel-mix instead of vite)

 ## installation

 Clone the repo into your environment

 ```sh
 git clone git@github.com:muath-ye/alfakeeh-assignment.git
 ```

Change the current directory to the cloned repo

 ```sh
cd alfakeeh-assignment
 ```

 Then install composer dependencies

 ```sh
 composer install
 ```

Create `.env` and copy the `.env.example` into the created `.env` file

```sh
cp .env.example .env
```

Migrate the database with dummy data with following command

```sh
touch database.sqlite && php artisan migrate --seed
```

Finally serve the project

```sh
php artisan serve
```

You can access the project on the [[http://127.0.0.1:8000](http://127.0.0.1:8000)] url and you can log in with one of following users

```
root@example.com
admin@example.com
user@example.com
```

The password of each user is `password`

> Note: If you register a new user, The user will not be able to login because of role restrictions

> Note: you can enable `2FA` from the profile of the user
