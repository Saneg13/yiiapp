<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 01.11.15
 * Time: 16:05
 */
?>

    <!DOCSTYLE HTML>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Страница для тестов с renderPartial</title>
        <link rel="stylesheet" type="text/css" href="/css/my_css.css" >
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    </head>
<body>
<div id="example">
    <?php $this->renderPartial('_ajaxCont', array('infoList'=>$nullArr)); ?>
</div>
<button onclick="style.display='none'">Press..</button><br /><br />
<?php

echo CHtml::ajaxButton ("Обновить данные",
    CController::createUrl('Ajax/Ajax1'),
    array('update' => '#example'));
?>