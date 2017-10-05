<?php

namespace App\Models;

use App\DB;
use App\Model;

class News extends Model {

    public $article;
    public $text;
    public $date;

    const TABLE = 'news';

    public static function getLastNews($limit)
    {
        $db = DB::instance();
        $lastNews = $db->query('SELECT * FROM ' . self::TABLE . ' ORDER BY date DESC' . ' LIMIT ' . $limit, self::class, []);
        return $lastNews;
    }


}