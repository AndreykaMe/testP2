<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.10.2017
 * Time: 9:20
 */

namespace App;


class View implements \Countable
{

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    /**
     * @param $template string Путь к шаблону
     */
    public function display($template)
    {

        echo $this->render($template);

    }

    public function render($template)
    {

        ob_start();
        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }

    public function count()
    {
        return count($this->data);
    }

}