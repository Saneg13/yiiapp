<?php

class ArenaForm extends CFormModel{


    abstract class Item
    {
        protected $cost;

        abstract function setCost($cost);

        abstract function getCost();
    }

    abstract class Weapon extends Item
    {
        protected $damage;

        abstract function setDamage($damage);

        abstract function getDamage();
    }

    class Sword extends Weapon
    {
        public function __construct($cost, $damage)
        {
            $this->cost = $cost;
            $this->damage = $damage;
            echo "Конструктор Sword работает..<br />";
        }

        public function setCost($cost)
        {
            $this->cost = $cost;
        }

        public function getCost()
        {
            return $this->cost;
        }

        public function setDamage($damage)
        {
            $this->damage = $damage;
        }

        public function getDamage()
        {
            return $this->damage;
        }

        public function name()
        {
            return get_class($this);
        }
    }

    class Bow extends Weapon
    {
        public function __construct($cost, $damage)
        {
            $this->cost = $cost;
            $this->damage = $damage;
            echo "Конструктор Bow работает..<br />";
        }

        public function setCost($cost)
        {
            $this->cost = $cost;
        }

        public function getCost()
        {
            return $this->cost;
        }

        public function setDamage($damage)
        {
            $this->damage = $damage;
        }

        public function getDamage()
        {
            return $this->damage;
        }

        public function name()
        {
            return get_class($this);
        }
    }

    class Knife extends Weapon
    {
        public function __construct($cost, $damage)
        {
            $this->cost = $cost;
            $this->damage = $damage;
            echo "Конструктор Knife работает..<br />";
        }

        public function setCost($cost)
        {
            $this->cost = $cost;
        }

        public function getCost()
        {
            return $this->cost;
        }

        public function setDamage($damage)
        {
            $this->damage = $damage;
        }

        public function getDamage()
        {
            return $this->damage;
        }

        public function name()
        {
            return get_class($this);
        }
    }

    abstract class Spell
    {
        protected $damage;

        abstract function setDamage($damage);

        abstract function getDamage();
    }

    class FireBall extends Spell
    {
        public function __construct($damage)
        {
            $this->damage = $damage;
            echo "Конструктор FireBall работает..<br />";
        }

        public function setDamage($damage)
        {
            $this->damage = $damage;
        }

        public function getDamage()
        {
            return $this->damage;
        }

        public function name()
        {
            return get_class($this);
        }
    }

    abstract class Armor extends Item
    {
        protected $defense;

        abstract function setDef($defense);

        abstract function getDef();
    }

    class LightArmor extends Armor
    {
        public function __construct($cost, $defense)
        {
            $this->cost = $cost;
            $this->defense = $defense;
            echo "Конструктор LightArmor работает..<br />";
        }

        public function setCost($cost)
        {
            $this->cost = $cost;
        }

        public function getCost()
        {
            return $this->cost;
        }

        public function setDef($defense)
        {
            $this->defense = $defense;
        }

        public function getDef()
        {
            return $this->defense;
        }
    }

    class Fighter
    {
        protected $armor;
        protected $weapon;
        protected $health;
        private $power;

        public function __construct(Armor $armor, Weapon $weapon, $health, $power)
        {
            $this->armor = $armor;
            $this->weapon = $weapon;
            $this->health = $health;
            $this->power = $power;
            echo "Конструктор Fighter работает..<br />";
        }

        public function getArmor()
        {
            return $this->armor;
        }

    public function getPower()
        {
            return $this->power;
    }

        public function setHealth($health)
        {
            $this->health = $health;
        }

        public function getDamage()
        {
            return $this->weapon->getDamage() + $this->power;
        }

        public function getHealth()
        {
            return $this->health + $this->armor->getDef();
        }

        public function getWeaponName()
        {
            return $this->weapon->name();
        }

        public function getSum()
        {
            return $this->armor->getCost() + $this->weapon->getCost() . " - стоимость вещей бойца с " . $this->weapon->name() . "'ом <br />";
        }
    }

    class Arena
    {
        protected $fighter1;
        protected $fighter2;

        //выполним типизацию, что бы Нож не дрался с Бойцом
        public function __construct(Fighter $fighter1, Fighter $fighter2)
        {
            $this->fighter1 = $fighter1;
            $this->fighter2 = $fighter2;
            echo "Конструктор Arena работает..<br />";
        }

        public function getFighter1()
        {
            return $this->fighter1;
        }

        public function getFighter2()
        {
        return $this->fighter2;
        }

        public function startFight()
        {
            while ($this->getFighter1()->getHealth() > 0 && $this->getFighter2()->getHealth() > 0) {
                $this->fighter1->setHealth($this->fighter1->getHealth() - $this->fighter2->getDamage());
                $this->fighter2->setHealth($this->fighter2->getHealth() - $this->fighter1->getDamage());
                echo $this->getFighter1()->getHealth() . " осталось здоровья у Бойца_1. <br />";
                echo $this->getFighter2()->getHealth() . " осталось здоровья у Бойца_2. <br />";
        }
    }

}
}

//вывести сражение
$arena1 = new Arena(new Fighter(new LightArmor(20, 5), new Bow(40, 10), 100, 5), new Fighter(new LightArmor(20, 10), new Sword(120, 5), 100, 4));
print $arena1->getFighter1()->getHealth() . "<br />";
print $arena1->getFighter2()->getHealth() . "<br />";
print $arena1->startFight();
print $arena1->getFighter1()->getSum();
print $arena1->getFighter2()->getSum();