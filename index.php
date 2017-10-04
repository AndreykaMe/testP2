<?php

    require __DIR__ . '/autoload.php';

    $db = new \App\DB();
    $res = $db->execute('CREATE TABLE foo (id SERIAL)');