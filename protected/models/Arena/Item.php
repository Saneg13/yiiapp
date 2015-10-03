<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 20:40
 */

/**
 * Class Item
 */
abstract class Item {
    /**
     * @var $cost
     */
    protected $cost;

    /**
     * @param $cost
     * @return mixed
     */
    abstract function setCost($cost);

    /**
     * @return mixed
     */
    abstract function getCost();

}