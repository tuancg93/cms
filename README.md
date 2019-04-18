# cms
## Features
List of basic functions:
- Log in, log out, forget your password, change your password
- User management
- Manage rights
- Manage menu
- Manage pages
- Manage the list
- Managing posts
## Getting started
Step1: git clone https://github.com/tuancg93/cms.git
Step2: run "composer install"
Step3: run "php artisan migrate"
Step4: run "php artisan key:generate
Step5: run "php artisan db::seed"
Acc: admin/12345678
## Structure overview
```
+-- README.md
+-- app
¦   +-- Console
¦   +-- Enums
¦   +-- Exceptions
¦   +-- Http
¦   ¦   +-- Controllers
¦   ¦   +-- Middleware
¦   ¦   +-- Kernel
¦   +-- Models
¦   +-- Providers
¦   +-- Repositories
¦   +-- User.php  
+-- bootstrap
¦   +-- cache
¦   +-- app.php
+-- config
¦   +-- app.php
¦   +-- auth.php
¦   +-- broadcasting.php
¦   +-- cache.php
¦   +-- database.php
¦   +-- filesystems.php
¦   +-- hashing.php
¦   +-- logging.php
¦   +-- mail.php
¦   +-- queue.php
¦   +-- services.php
¦   +-- sesion.php
¦   +-- view.php
+-- database
¦   +-- factories
¦   +-- migrations
¦   +-- seeds
¦   +-- gitignore
+-- public
¦   +-- admin
¦   +-- fonts
¦   +-- images
¦   +-- img
¦   +-- htaccess
¦   +-- favicon.ico
¦   +-- index.php
¦   +-- robots.txt
+-- resources
¦   +-- js
¦   +-- lang
¦   +-- sass
¦   +-- views
+-- route
¦   +-- api.php
¦   +-- channels.php
¦   +-- console.php
¦   +-- web.php
+-- storage
¦   +-- app
¦   +-- framework
¦   +-- logs
+-- tests
¦   +-- Feature
¦   +-- Unit
¦   +-- CreatesApplication.php
¦   +-- TestCase.php
+-- vendor
+-- yarn.lock
```