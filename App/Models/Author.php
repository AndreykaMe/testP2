<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.10.2017
 * Time: 21:22
 */

namespace App\Models;


use App\DB;
use App\Model;

class Author extends Model
{

    public $id;
    public $name;

    const TABLE = 'authors';


}