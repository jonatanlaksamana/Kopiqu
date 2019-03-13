this project is made by :
-  Jonathan Laksamana Purnomo for kadoku internship test code


Kopiqu 

Kopiku is a e-commerce website to help sally expand 
her coffe shop 


Apps Info :
- Framework : Laravel 5.8.0


prerequisite :
- php >= 5.8 (recommend php 7.3)
- apache server (recommend use xampp)
- mysql
- composer

how to setup and run this app :
- clone this project (git clone url)
- go to project directory
- In CLi /Terminal Type :
  -  composer self-update
  - composer install
  - cp .env.example .env
  - php artisan key:generate
- setup database on .env file
  - php artisan migrate --seed 

After you run (migrate --seed) by deafult 
you  got :
- 4(users 3 admin and 1 deafult users):
- Admin1 (Email = admin1@admin.com , password = admin123)
- Admin2 (Email = admin2@admin.com , password = admin123)
- Admin3 (Email = admin3@admin.com , password = admin123)
- user1  (Email = user@user.com , password=user123)
- and you also got many dummy data for start 

i already make a automated test with travis-ci here is the link:
- https://travis-ci.org/jonatanlaksamana/Kopiqu/branches

i already deply to heroku here is the link:
- https://coffequ.herokuapp.com/

to run  test, go to root folder and type :
- vendor/bin/phpunit

