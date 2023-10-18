<?php

App::get("database")->delete(request('id'), "users");
