<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 27.08.15
 * Time: 18:42
 */
$sdb = "users"; //название БД
$username = "root";
$password = "root";
$table_name = "info"; // название таблицы


/* Создаем соединение */
mysql_connect($sdb, $username, $password) or die ("Не могу создать соединение");
mysql_query('SET NAMES utf8') or header('Location: Error');


/*
 * // выбираем базу данных
if(!mysql_select_db($db_name, $link))
{
    echo "<br>Не могу выбрать базу данных<br>";
    exit();
}
mysql_query('SET NAMES utf8');
*/

/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($table_name) or die (mysql_error());