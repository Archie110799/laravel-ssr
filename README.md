## Setting

1. Install Homebrew

    ```bash

    ```

2. Install Node.js and npm

    ```bash
        brew install node
    ```

3. Install PHP

    ```bash
        brew install php
    ```

4. Install Composer

    ```bash
        curl -sS https://getcomposer.org/installer | php sudo mv composer.phar /usr/local/bin/composer
    ```

5. Install Laravel

    ```bash
        composer global require laravel/installer
    ```

6. Start server

    ```bash
        brew services start php
    ```

## Used

1. Project created

    ```bash
       composer create-project --prefer-dist laravel/laravel vuelaravelcrud
    ```

2. Install yarn

    ```bash
        yarn install
    ```

3. Install vue3 (https://www.linkedin.com/pulse/how-install-vue-3-laravel-10-vite-mahmoud-adel)

    ```bash
        yarn add vue@next vue-loader@next @vitejs/plugin-vue
    ```

4. Run PHP Local Server

    ```bash
        php artisan serve
    ```

5. Run Node Local Server

    ```bash
        yarn run dev
    ```

6. Remote install

    ```bash
        php artisan up
        composer install
        yarn install
        yarn prod
        php artisan migrate
        php artisan db:seed
    ```

7. Remote deploy - make update

    ```bash
        php artisan down
        git pull
        composer install
        php artisan cache:clear
        php artisan migrate
        yarn install
        yarn prod
        php artían up
    ```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

#

Laravel: php framework
Composer: php package manager

Artisan: Công cụ php

-   config:cache
-   migrate
-   migrate:rollback
-   migrate:refresh
-   make:model Models/Article -m [-m : link với migration -> tạo 1 migrate]
-   make:controller ArticleController --resource [--resource : Tạo 1 resource controller]
-   make:seeder ArticlesTableSeeder
-   make:request StoreArticlesRequest [Middleware]
-   make:middleware RoleMiddleware
-   db:seed --class=RoleTableSeeder
-   composer dump-autoload
-   route:list
-   passport:install

#

MVC
Blade template
Eloquent model : Model được link với migration => Liên kết với DB (ORM: object related mapping - Fillable)
Route
Auth, Middleware
Migration
Seeder
Cache
Schedule

Laravel mix => build css , js -> chuyển ra folder public

# Key

Mỗi ứng dụng sẽ có 1 key -> dùng để build server production

# Resdis

Cơ sở dữ liệu dạng key-value lưu trên ram -> đọc dữ liệu nhanh hơn

# CSRF

# CSS reset https://meyerweb.com/eric/tools/css/reset/

# FONT https://fonts.google.com/selection/embed
