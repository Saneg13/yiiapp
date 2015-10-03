<?php

// class ArenaForm extends CFormModel{


//вывести сражение
$arena1 = new Arena(new Fighter(new LightArmor(20, 5), new Bow(40, 10), 100, 5), new Fighter(new LightArmor(20, 10), new Sword(120, 5), 100, 4));
print $arena1->getFighter1()->getHealth() . "<br />";
print $arena1->getFighter2()->getHealth() . "<br />";
print $arena1->startFight();
print $arena1->getFighter1()->getSum();
print $arena1->getFighter2()->getSum();