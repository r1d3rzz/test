<?php

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                "{$config['name']}:host={$config['host']};dbname={$config['dbname']}",
                "{$config['username']}",
                "{$config['password']}"
            );
        } catch (PDOException $th) {
            dd($th->getMessage());
        }
    }
}
