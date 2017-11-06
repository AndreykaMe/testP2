<?php

namespace App\Models;

use App\DB;
use App\Model;

class News extends Model {

    public $article;
    public $text;
    public $date;
    public $author_id;

    const TABLE = 'news';

    public static function getLastNews($limit)
    {
        $db = DB::instance();
        $lastNews = $db->query('SELECT * FROM ' . self::TABLE . ' ORDER BY date DESC' . ' LIMIT ' . $limit, self::class, []);
        return $lastNews;
    }

    /**
     * @param $name string Имя переменной
     * @return Author
     */
    function __get($name)
    {
        if($name == 'author') {
            if (isset($this->author_id)) {
                $author = Author::findById($this->author_id);
                return $author;
            } else {
                return false;
            }
        }
    }


}