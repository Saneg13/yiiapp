<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.08.15
 * Time: 21:30
 */

/**
 * Class Arena
 */
class Arena
{
    /**
     * @var Fighter
     */
    protected $fighter1;
    protected $fighter2;
    /**
     * выполним типизацию, что бы Нож не дрался с Бойцом
     * @param Fighter $fighter1
     * @param Fighter $fighter2
     */
    public function __construct(Fighter $fighter1, Fighter $fighter2)
    {
        $this->fighter1 = $fighter1;
        $this->fighter2 = $fighter2;
        //echo "Конструктор Arena работает..<br />";
    }

    /**
     * @return Fighter
     */
    public function getFighter1()
    {
        return $this->fighter1;
    }

    /**
     * @return Fighter
     */
    public function getFighter2()
    {
        return $this->fighter2;
    }

    /**
     *
     */
    public function startFight()
    {
        while ($this->getFighter1()->getHealth() > 0 && $this->getFighter2()->getHealth() > 0) {
            $this->fighter1->setHealth($this->fighter1->getHealth() - $this->fighter2->getDamage());
            $this->fighter2->setHealth($this->fighter2->getHealth() - $this->fighter1->getDamage());
            print $this->getFighter1()->getHealth() . " health remains a fighter 1. <br />";
            print $this->getFighter2()->getHealth() . " health remains a fighter 2. <br />";
        }

    }
}