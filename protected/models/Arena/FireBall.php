<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 21:22
 */

/**
 * Class FireBall
 */
class FireBall extends Spell {
    /**
     * @param $damage
     */
    public function __construct($damage)
    {
        $this->damage = $damage;
        //echo "Конструктор FireBall работает..<br />";
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