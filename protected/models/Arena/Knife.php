<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 21:13
 */

/**
 * Class Knife
 */
class Knife extends Weapon {
    /**
     * @param $cost
     * @param $damage
     */
    public function __construct($cost, $damage)
    {
        $this->cost = $cost;
        $this->damage = $damage;
        //echo "Конструктор Knife работает..<br />";
    }

    /**
     * @param $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @return string
     */
    public function name()
    {
        return get_class($this);
    }

}