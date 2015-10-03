<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 21:19
 */

/**
 * Class Spell
 */
abstract class Spell {
    /**
     * @var $damage
     */
    protected $damage;

    /**
     * @param $damage
     * @return mixed
     */
    abstract function setDamage($damage);

    /**
     * @return mixed
     */
    abstract function getDamage();

}