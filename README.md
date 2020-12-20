[![Build Status](https://travis-ci.org/Skwoat/ramverk1-module.svg?branch=main)](https://travis-ci.org/Skwoat/ramverk1-module)  

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Skwoat/ramverk1-module/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Skwoat/ramverk1-module/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/Skwoat/ramverk1-module/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/Skwoat/ramverk1-module/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/Skwoat/ramverk1-module/badges/build.png?b=main)](https://scrutinizer-ci.com/g/Skwoat/ramverk1-module/build-status/main)

### Weather module

This module is meant to be used with the anax framework for php.
To install the module follow the steps bellow. 

Navigate to the root of your anax file structure.

### 1: Install the module

run the following command

`composer require seno19/weather`

### 2: Copy files

run the following commands

`rsync -av vendor/seno19/weather/config ./`  
`rsync -av vendor/seno19/weather/view ./`  
`rsync -av vendor/seno19/weather/src ./`  

and if you want to run the tests run the following command
`rsync -av vendor/seno19/weather/test ./`  

### 3: API-keys

in `config/api/keys.php` add your api-keys

you can find the keys here  
[ipstack](https://ipstack.com/)  
[openweathermap](https://openweathermap.org/)

### 4: Navbar

in `config/navbar/header.php` add the following

```
[
    "text" => "DI",
    "url" => "di",
    "title" => "di",
],
```