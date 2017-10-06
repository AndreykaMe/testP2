<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 06.10.2017
 * Time: 18:36
 */

namespace App;


class Config
{

    use Singleton;

    public $data;

    protected function __construct()
    {
        $this->data = include( __DIR__ . '/cfg.php');
    }

}