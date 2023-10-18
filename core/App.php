<?php

namespace core;

class App
{
    public static $data = [];

    public static function bind($key, $val)
    {
        self::$data[$key] = $val;
    }

    public static function get($key)
    {
        return self::$data[$key];
    }
}
