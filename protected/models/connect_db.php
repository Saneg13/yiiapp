<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 27.08.15
 * Time: 18:42
 */
$sdb_name = "users";
$u_name = "root";
$u_password = "root";
$db_name = "info";

// соединение с сервером базы данных
if(!$link = mysql_connect($sdb_name, $u_name, $u_password))
{
    echo "<br>Не могу соединиться с сервером базы данных<br>";
    exit();
}

// выбираем базу данных
if(!mysql_select_db($db_name, $link))
{
    echo "<br>Не могу выбрать базу данных<br>";
    exit();
}

mysql_query('SET NAMES utf8');
