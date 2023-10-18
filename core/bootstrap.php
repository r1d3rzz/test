<?php

use core\App;
use core\Router;

require "vendor/autoload.php";
require "function.php";

App::bind("config", require "config.php");
App::bind("database", new QueryBuilder(Connection::make(App::get("config")['database'])));

Router::load("web.php")->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);
