# <a href="#" class="button">SERVER-SIDE CA</a> [![Button 1](https://img.shields.io/badge/%22SERVER-SIDE%22-red.svg)](https://example.com/button1 "Tooltip Text") <a href="https://www.dkit.ie/" class="button">LARAVEL MARIO BROS BLOG</a>

This project involves building a website using the Laravel framework, implementing the Model-View-Controller (MVC) architecture. The theme for this website is on the history of Mario Bros. The website will contain a blog section with at least five articles.


![Php, Html, Sql](https://github.com/abielinsky/000_LaravelGamesBlog/blob/master/public/images/mariosss.jpg?raw=true)

## <a href="#" class="button big">Requirements</a> [![Button 1](https://img.shields.io/badge/%22Requirements%22-red.svg)](https://example.com/button1 "Tooltip Text")

•	PHP 7.3 or Higher <br>
•	Node 12.13.0 or Higher <br>


## <a href="#" class="button big">Usage</a> [![Button 1](https://img.shields.io/badge/%22Usage%22-red.svg)](https://example.com/button1 "Tooltip Text")

Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```


## <a href="#" class="button big">Before starting</a> [![Button 1](https://img.shields.io/badge/%22Before_Starting%22-red.svg)](https://example.com/button1 "Tooltip Text")

Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## <a href="#" class="button big">Features</a> [![Button 1](https://img.shields.io/badge/%22Features-Featurres%22-blue.svg)](https://example.com/button1 "Tooltip Text")

This project includes the following features:

- Task management: Users can register and post articles.
- Responsive design: The web application is designed to be
  responsive and work well on mobile devices.
- User authentication: Users must create an account and log in to access the application.
- User authorization: Users can only edit and delete their own articles.
- Database: The application uses a MySQL database to store and retrieve data.
- Error handling: The application handles errors gracefully and prevents crashes.
- Logging: The application logs errors to facilitate debugging.


## <a href="#" class="button big">Technologies Used </a> [![Button 1](https://img.shields.io/badge/%22Technologies-Used%22-blue.svg)](https://example.com/button1 "Tooltip Text")

This project uses the following technologies:

- [![View PHP](https://img.shields.io/badge/PHP:-blue.svg)]() Used to handle server-side logic and database interactions.
- [![View PHP](https://img.shields.io/badge/HTML/CSS:-blue.svg)]() Used to create the user interface.
- [![View PHP](https://img.shields.io/badge/MySQL:-blue.svg)]() Used to store data tables information.



## <a href="#" class="button big">Contributing</a> [![Button 1](https://img.shields.io/badge/%22Contributing-Contributing%22-blue.svg)](https://example.com/button1 "Tooltip Text")

If you'd like to contribute to this project, please feel
free to submit a pull request.
However, please note that this is a sample project
meant to demonstrate how to use PHP, HTML, and SQL together.


[![Button 1](https://img.shields.io/badge/Erlingus-Abielinsky%20-blue.svg)](https://example.com/button1 "Tooltip Text")
