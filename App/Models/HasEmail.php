<?php

namespace App\Models;

interface HasEmail
{

    /**
     * Метод, возвращающий адрес e-mail
     * @deprecated
     * @return string Адрес электронной почты
     */
    public function getEmail();
}