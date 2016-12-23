# Use Eloquent In CodeIgniter2

This is a demo of use eloquent in CodeIgniter2. You don't do much change to use Eloquent in your origin project.

The Eloquent ORM provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table. Models allow you to query for data in your tables, as well as insert new records into the table.

# Let's Start

## Require
PHP version >= 5.4
Composer

### Step 1  Install Eloquent
Use Composer to Install Eloquent. so you need to create a composer.json file.

```
{
    "require": {
        "php": ">=5.4.0",
        "illuminate/database": "*"
    },
}

```
after create composer.json in your project, then run `composer update`, this command will help you to install Eloquent in the /vendor directory

### Step 2  Load Eloquent Into Project
create `application/third_party/eloquent.php` file
after finish the command `composer update`, a autoload.php will generate in the vendor directory.
require the autoload.php && database.php into the project,
then you can boot Eloquent

```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
// Autoload
require BASEPATH.'../vendor/autoload.php';
//database config
require_once APPPATH.'config/database.php';
// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection($db['eloquent']);
$capsule->bootEloquent();

```

### Step 3  Load eloquent.php while the CI project init

```
//load Eloquent to CI
require APPPATH.'third_party/eloquent.php';

```

add the line before `require_once BASEPATH.'core/CodeIgniter.php`


### Step 4 Create Model

Create Model file; create `application/models/Article.php` file

```
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Article Model
*/
class Article extends Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;
}

```

### Step 5 Create Table && Insert test record

use `database/Articles.sql` to create a Article table and add some record for test.

```
DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `title`, `content`)
VALUES
    (1,'This is artice 1','This is the first Article Content'),
    (2,'This is artice 2','This is the second Article Content');

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;
```

### Step 6  Use Composer autoload Model file
update `composer.php`,

```
{
    "require": {
        "php": ">=5.4.0",
        "illuminate/database": "*"
    },
    "autoload": {
        "classmap": [
            "application/models"
        ]
    }
}
```

after update `composer.php`, then run the command `composer dump-autoload` to generate new autoload.php file.


### Step 7  Enjoy Eloquent In your Project
Create those file in the project

1. `application\controller\home.php`
2. `application\views\list.php`
3. `application\views\detail.php`


##It's easy to use Eloquent in the CodeIgniter2, right?
If your project is hard to upgrade to Laravel, or you don't like Laravel, this is a good way for you to use Eloquent.


#Thanks
1. [CodeIgniter 2](http://www.codeigniter.com/download)
2. [Eloquent](https://laravel.com/docs/5.3/eloquent)
3. [illuminate/database](https://github.com/illuminate/database)

