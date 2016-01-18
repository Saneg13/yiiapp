<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 21:25
 */

/**
 * Class LightArmor
 */
class LightArmor extends Armor {
    /**
     * @param $cost
     * @param $defense
     */
    public function __construct($cost, $defense)
    {
        $this->cost = $cost;
        $this->defense = $defense;
        //echo "Конструктор LightArmor работает..<br />";
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
     * @param $defense
     */
    public function setDef($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return mixed
     */
    public function getDef()
    {
        return $this->defense;
    }

    public function name()
    {
        return get_class($this);
    }

}