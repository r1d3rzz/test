<?php

use controller\PageController;
use core\Router;

Router::get("", [PageController::class, 'index']);
Router::get("about", [PageController::class, 'about']);
Router::post("names", [PageController::class, 'store']);
Router::get("delete", [PageController::class, 'destroy']);
