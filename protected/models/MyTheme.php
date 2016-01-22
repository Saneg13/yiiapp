<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 21.01.16
 * Time: 19:45
 */
class MyTheme extends CActiveForm
{
    public $theme;

    public function __construct($theme)
    {
        $this->theme = $theme;
        echo "Конструктор MyTheme работает..<br />";
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    public function getTheme()
    {
        return $this->theme;
    }

    public function name()
    {
        return get_class($this);
    }
}
