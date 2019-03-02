<a href="https://www.growstocks.xyz" target="_blank"><img src="https://www.growstocks.xyz/img/SimpleStock.png"></a>

![Status](https://img.shields.io/badge/Status-BETA-blue.svg?style=for-the-badge&logo=appveyor)
[![Issues](https://img.shields.io/github/issues/MatteuGT/SimpleStock.svg?style=for-the-badge&logo=appveyor)](https://github.com/MatteuGT/SimpleStock/issues)
[![License](https://img.shields.io/github/license/MatteuGT/SimpleStock.svg?style=for-the-badge&logo=appveyor)](https://github.com/MatteuGT/SimpleStock/blob/master/LICENSE)<br>
<!--[![Build Status](https://travis-ci.org/MatteuGT/SimpleStock.svg?branch=master)](https://travis-ci.org/MatteuGT/SimpleStock)-->

### Made with &hearts; by GrowStocks Development

Proprietary PHP Library for GrowStocks now OPEN-SOURCED!

## Requirements
* PHP 7.1+
* Text Editor (Prefferably VSCode or Sublime Text)
* Local Server (localhost:3600)
* a database with the required columns (see below) [MySQL]
* Basic MySQL Database management skills
* Basic PHP skills

## What is SimpleStock?
It is <a href="https://www.growstocks.ga" target="_blank">GrowStock's</a> proprietary PHP library to make their website, it let's their developers do less code and make the most out of the function, hence the name SimpleStock. It's basically a library of commands that the developers use in their website pages, now we decided to make it open source so everyone can contribute to the project!

## Terms of Use
If you do want to use this library in your websites, webapps and apps, please do keep these points in mind:
* You can use the plugins as much as you want to, but do credit GrowStocks for the plugins used.

## How to use
Well we are still working on the functions needed but here are the first steps on making the plugins work.

#### 1. Database creation
Make sure that you make a MySQL database (via phpMyAdmin) with the following columns:

| rowID | ID | itemName | itemQty | itemWls | itemRate | itemStatus | itemDemand |
| ----- | -- | -------- | ------- | ------- | -------- | ---------- | ---------- |
|   01  | 0  | Blank    | 0       | 0       | NULL     | UNDEF      |  UNDEF     |

#### 2. Inclusion of files
Make sure that the files of this library is in the same folder as the website. After that, include the `autoload.php` file to the pages you want the plugin to be in by adding this to the top of the file:
```php
<?php
  include("autoload.php");
?>
```
Just by adding this command on top, will automatically load every command needed in the files.

#### 3. Connection
Of course we need to connect your database to the website itself for it to function. Now, open the `includes` directory and click the `dbconn.php` file. Now fill up the file with the following:

```php
<?php
  $servername = "localhost (if it's a remote database, please change the localhost to the appropriate server name/address)";
  $username = "(your database username here)";
  $password = "(your database password here)";
  $dbname = "(the database name goes here)";
  
  //This connects the whole website to the database:
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  //Error handler:
  if(!$conn){
    exit("Couldn't establish a database conection! Please refresh this page.");
  }
?>
```

#### 4. Commands
Once everything is in place, it's time to use the commands in the library.

| Command | Function |
| ------- | -------- |
| `rate($rawData)` | it auto calculates the rate of an item. |
| `price($rawData)` | it retrieves the compiled price of an item, it combines the two string variables ` $data['itemQty']` & `$data['itemWls']`. |
| `status($rawData)` | it determines the current price status of the item. |
| `trend($rawData)` | it determines the current trend status of the item. |
| `rec($rawData)` | it determines the recommendation status of an item. |

| More commands to produce soon! |
| ------------------------------ |
