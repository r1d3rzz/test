<?php

namespace controller;

use core\App;

class PageController
{
    public function index()
    {
        return view("index", [
            "users" => App::get("database")->selectAll("users")
        ]);
    }

    public function about()
    {
        return view("about");
    }

    public function store()
    {
        App::get("database")->insert([
            "name" => request('name'),
        ], "users");

        return redirect();
    }

    public function destroy()
    {
        App::get("database")->delete(request('id'), "users");

        return redirect();
    }
}
