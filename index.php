<?php

    require __DIR__ . '/autoload.php';

    //$news = \App\Models\News::getLastNews(3);

    //include('App/Views/newsTemplate.php');

    //$user = \App\Models\User::findById(21);
    //$user->name = 'Roman';
    //$user->email = 'Roman@roma.ru';
    //$user->insert();
    //$user->name = 'Roman';
    //$user->delete();

    $users = \App\Models\User::findAll();

    include __DIR__ . '/App/templates/index.php';
