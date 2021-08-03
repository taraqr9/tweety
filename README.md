<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Tweety

This is a sample application that demonstrates a `Tweeter` website using Laravel Framework. The application loads products into a MySQL database and displays them. Users can post their post, follow another user, give like and dislike those following user posts. User can visit their own profile or following people's profiles. 

## Import Data
Then give the command into the command line ->
```bash
php artisan db:seed
```


## Getting Started
To get started  you can simply clone this `bigdata` repository.

Clone the `tweety` repository using git:

```bash
clone https://github.com/taraqr9/tweety.git
cd tweety
```

After the clone project first give a command on the console ->
```bash
composer dump-autoload 
```


Then give the command ->
```bash
php artisan migrate
php artisan db:seed
```

## Tech Stack
* Laravel
* MySQL
* Tailwindapp
