<?php


    require 'autoload.php';

    $article = \App\Models\News::findById($_GET['id']);

    include('App\Views\articleTemplate.php');