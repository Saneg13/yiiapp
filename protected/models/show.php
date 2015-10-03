<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.09.15
 * Time: 10:28
 */
/*Include Database connections info.*/
$dsn = 'localhost';
$username = 'root';
$password = 'root';
//соединение явно
$connection=new CDbConnection($dsn,$username,$password);

//указав SQL-выражение
$sql = "SELECT * FROM `person`";
$command=$connection->createCommand($sql);

// выполнение запроса типа `SELECT`
$dataReader=$command->query("select * from `person` where `name`=".$_REQUEST['user_name']);

// возвращает все строки результата запроса
$rows=$command->queryAll();

// получаем все строки разом в виде массива
$rows=$dataReader->readAll();

echo $rows;