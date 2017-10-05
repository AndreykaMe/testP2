<?php

    require __DIR__ . '/autoload.php';

    $news = \App\Models\News::getLastNews(3);

    //include('App/Views/newsTemplate.php');

    $user = new \App\Models\User();
    $user->name = 'Vasya';
    $user->email = 'Vasya@var.ru';
    $user->insert();
