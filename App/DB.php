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

        use Singleton;

        protected $dbh;
        protected $cfg;

        protected function __construct()
        {
            $cfg = Config::instance();
            $this->dbh = new \PDO('mysql:host=' . $cfg->data['db']['host'] . ';dbname=' . $cfg->data['db']['dbname'] , $cfg->data['db']['user'], $cfg->data['db']['password']);
        }

        public function execute($sql)
        {
            $sth = $this->dbh->prepare($sql);
            $res = $sth->execute();
            return $res;
        }

        public function query($sql, $class, array $data)
        {

            $sth = $this->dbh->prepare($sql);
            $res = $sth->execute($data);
            if (false !== $res) {
                return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
            }
            return [];
        }



    }