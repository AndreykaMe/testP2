<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 04.10.2017
 * Time: 13:32
 */

namespace App;


abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = DB::instance();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class, []);
    }

    public static function findById(int $id)
    {
        $db = DB::instance();
        $arr = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id = :id', static::class, [
            ':id' => $id
        ]);
        if(!empty($arr)){
            return $arr[0];
        } else {
            return false;
        }
    }

}