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

    public $id;

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

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':' . $k] = $v;
        }
        var_dump($values);

        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(',', $columns) . ') VALUES 
        (' . implode(',', array_keys($values)) . ')';
        $db = DB::instance();
        $db->query($sql, static::class, $values);
        $this->id = $db->lastInsertId();
    }

    public function update()
    {

        $columns = [];
        $values = [];

        foreach($this as $k => $v) {
            $values[':' . $k] = $v;
            if('id' == $k) {
                continue;
            }
            $columns[] = $k . '=:' . $k;
        }


        $sql = 'UPDATE ' . static::TABLE . ' SET ' .
             implode(',', $columns) . ' WHERE id=:id';
        $db = DB::instance();
        return $db->query($sql, static::class, $values);
    }

    public function save()
    {
        if ($this->isNew()) {
            update();
        } else {
            insert();
        }
    }

    public function delete()
    {
        if (isset($this->id)) {
            $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
            $db = DB::instance();
            return $db->query($sql, static::class, [
                ':id' => $this->id ]);
        } else {
            return false;
        }

    }

}