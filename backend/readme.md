# Basic MVC Framework 

This MVC framework is written in PHP and is based on an opensource framework by [Brad Traversy](http://traversymedia.com) 

## Documentation

Inside a terminal navigate to your `htdocs` folder

Setup the PROJECT as the name of your project

```
FOLDER=PROJECT
```

Copy the content of `https://github.com/to-jk11/php-mvc-kit/` into your `htdocs` folder, it will be placed in a subfolder

```
mkdir $FOLDER && cd $FOLDER && curl -LOk https://github.com/to-jk11/php-mvc-kit/archive/xampp.zip && unzip xampp.zip && cd php-mvc-kit-xampp/ && find . -maxdepth 1 -exec mv {} .. \; && cd .. && rm -rf php-mvc-kit-xampp && rm -rf xampp.zip
```

Create a database in PHPMyAdmin and update the name of the database in your `.env ` file

ALSO UPDATE YOUR `.htaccess` file in your htdocs folder to suit your project folder name
