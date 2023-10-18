<?php

function dd($data = "")
{
    echo "<pre>";
    die(print_r($data, 1));
}

function view($name, $data = [])
{
    extract($data);
    return require "views/$name.view.php";
}

function request(string $name)
{
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        return $_GET[$name];
    };

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        return $_POST[$name];
    };
}

function redirect($path = "/")
{
    header("Location: $path");
}
