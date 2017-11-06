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


    $view = new App\View;
    $view->news = \App\Models\News::findAll();
    $view->display(__DIR__ . '/App/Views/newsTemplate.php');

