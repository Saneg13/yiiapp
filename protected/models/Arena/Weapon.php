<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 20:42
 */

/**
 * Class Weapon
 */
abstract class Weapon extends Item {
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