<?php

    require __DIR__ . '/autoload.php';

    $db = new \App\DB();
    $data = $db->query('SELECT * FROM foo');

    var_dump($data);