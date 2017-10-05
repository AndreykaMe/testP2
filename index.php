<?php

    require __DIR__ . '/autoload.php';

    $news = \App\Models\News::getLastNews(3);

    //include('App/Views/newsTemplate.php');

    $users = \App\Models\User::findAll();

    function sendEmail(\App\Models\User $user, string $message)
    {
        echo 'Почта уходит ' . $user->email;
    }

    sendEmail($users[0], 'message');
