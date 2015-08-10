<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 21:28
 */

/**
 * Class Fighter
 */
class Fighter {
    /**
     * @var Armor
     */
    protected $armor;
    protected $weapon;
    protected $health;
    private $power;

    /**
     * @param Armor $armor
     * @param Weapon $weapon
     * @param $health
     * @param $power
     */
    public function __construct(Armor $armor, Weapon $weapon, $health, $power)
    {
        $this->armor = $armor;
        $this->weapon = $weapon;
        $this->health = $health;
        $this->power = $power;
        //echo "Конструктор Fighter работает..<br />";
    }

    /**
     * @return Armor
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->weapon->getDamage() + $this->power;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health + $this->armor->getDef();
    }

    /**
     * @return mixed
     */
    public function getWeaponName()
    {
        return $this->weapon->name();
    }

    /**
     * @return string
     */
    public function getSum()
    {
        return $this->armor->getCost() + $this->weapon->getCost() . " - cost Fighter's things with " . $this->weapon->name() . " <br />";
    }

}