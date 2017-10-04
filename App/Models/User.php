<?php


namespace App\Models;

use App\DB;


class User
{
    public $email;
    public $name;

    public static function findAll()
    {
        $db = new DB();
        return $db->query('SELECT * FROM users', 'App\Models\User');
    }
}