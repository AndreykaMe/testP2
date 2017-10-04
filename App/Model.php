<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 04.10.2017
 * Time: 13:32
 */

namespace App;


class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new DB();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);
    }
}