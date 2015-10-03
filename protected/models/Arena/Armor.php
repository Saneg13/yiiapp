<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 21:24
 */

/**
 * Class Armor
 */
abstract class Armor extends Item {
    /**
     * @var
     */
    protected $defense;

    /**
     * @param $defense
     * @return mixed
     */
    abstract function setDef($defense);

    /**
     * @return mixed
     */
    abstract function getDef();

}