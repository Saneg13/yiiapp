<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 08.07.15
 * Time: 21:51
 */
class ForTest
{
    protected $cost;

    public function __construct()
    {
        $this->cost = $cost = 100;

       // echo "Конструктор ForTest работает..<br />";
    }

    public function getTest()
    {
        return $this->cost."<br />";
    }

    public function doTest()
    {
        echo "<br />".$this->cost."<br />";
    }
}

