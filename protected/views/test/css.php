<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 13.11.15
 * Time: 18:49
 */
?>
<!DOCSTYLE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
</head>
<body id="body">
<h3>Css test page</h3>
<p id="t1">Здесь должен быть синий текст.</p>
<input type="button" value="Щёлкни" onclick="document.getElementById('t1').style.color = '#0000ff'"/><br /><br /><br />
<div id="div">
    <p><label for="labeled1">Фон страницы: </label><input id="labeled1" type="radio" name="label" value="1" onclick="document.getElementById('body').style.backgroundColor = '#00FF00'"/>зеленый</p>
    <p><label for="labeled2">              </label><input id="labeled2" type="radio" name="label" value="1" onclick="document.getElementById('body').style.backgroundColor = '#ffffff'"/>белый</p>
    <p><label for="labeled3">Два</label><input id="labeled3" type="radio" name="label" value="2" onclick="document.getElementById('div').style.color = '#f0ff00'"/></p>
    <p><label for="labeled4">Три</label><input id="labeled4" type="radio" name="label" value="3" onclick="document.getElementById('div').style.fontSize = '24px'"/></p>
    <p><label for="labeled5">Четыре</label><input id="labeled5" type="radio" name="label" value="4" onclick="document.getElementById('div').style.fontSize = '12px'"/></p>
</div>
</body>