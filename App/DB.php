<?php
    namespace App;
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 04.10.2017
 * Time: 10:30
 */
    class DB
    {

        protected $dbh;

        function __construct()
        {
            $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=php2', 'root', '');
        }

        public function execute($sql)
        {
            $sth = $this->dbh->prepare($sql);
            $res = $sth->execute();
            return $res;
        }

        public function query($sql)
        {
            $sth = $this->dbh->prepare($sql);
            $res = $sth->execute();
            if (false !== $res) {
                return $sth->fetchAll();
            }
            return [];
        }



    }