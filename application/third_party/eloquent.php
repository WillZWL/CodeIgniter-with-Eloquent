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