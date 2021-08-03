<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Tweety

This is a sample application that demonstrates a `Tweeter` website using Laravel Framework. The application loads products into a MySQL database and displays them. Users can post their post, follow another user, give like and dislike those following user posts. User can visit their own profile or following people's profiles. 

## Import Data
Then give the command into the command line ->
```bash
php artisan db:seed
```

![Screenshot (683)](https://user-images.githubusercontent.com/37486791/128085682-d1decafb-ae85-46f3-a0d8-1b594a4600a2.png)
![Screenshot (684)](https://user-images.githubusercontent.com/37486791/128085693-cded27a3-90ad-457d-ae48-b347d98b8ae9.png)
![Screenshot (685)](https://user-images.githubusercontent.com/37486791/128085699-f6a4fb04-e55f-4cd4-b4bb-b6589d41ffa4.png)
![Screenshot (686)](https://user-images.githubusercontent.com/37486791/128085705-ef2a5edb-7723-4c4f-a30d-c765c87dfc7c.png)



## Getting Started
To get started  you can simply clone this `tweety` repository.

Clone the `tweety` repository using git:

```bash
clone https://github.com/taraqr9/tweety.git
cd tweety
```

After the clone project first give a command on the console ->
```bash
composer update
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
