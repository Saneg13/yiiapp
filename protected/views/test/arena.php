<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 08.07.15
 * Time: 20:32
 */
// header
echo '<h3>Игра с использованием ООП. <b><a href="/test/arena">Арена</a></b></h3>';
echo '<br/>';
echo '<h4>Описание бойцов</h4>';
//first fighter
echo 'Первый боец, Оружие - '.$arena->getFighter1()->getWeaponName().'. Доспехи - '.$arena->getFighter1()->getArmorName().'.';
echo '<br/>';
echo 'Стоимость снаряжения - '.$cost1;
echo '<br/><hr/>';
//second fighter
echo 'Второй боец, Оружие - '.$arena->getFighter2()->getWeaponName().'. Доспехи - '.$arena->getFighter2()->getArmorName().'.';
echo '<br/>';
echo 'Стоимость снаряжения - '.$cost2;
echo '<br/><hr/>';
// let's fight =)
echo '<h4>Хронология поединка</h4>';
$arena->startFight();