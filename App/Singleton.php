<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 05.10.2017
 * Time: 23:21
 */

namespace App;


trait Singleton
{

    protected static $instance;

    protected function __construct()
    {

    }

    public static function instance()
    {
        if( null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }


}