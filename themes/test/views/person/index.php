<?php
/*
* Created by PhpStorm.
* User: sanek
* Date: 08.07.15
* Time: 20:32
*/
?>

<!DOCSTYLE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Страница для тестов с renderPartial</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <script type="text/javascript">
        document.getElementById('t').style.color = '#00ff00';
    </script>
</head>
<body>
    <div class="clearfix"><h2>Страница для тестов с renderPartial</h2></div>
<div id="view">
    <?php $this->renderPartial('_ajaxContent', array('myValue1'=>$myValue, 'myValue3'=>$myValue2)); ?>

</div>
<?php echo CHtml::ajaxButton ("Update data",
    CController::createUrl('Person/UpdateAjax'),
    array('update' => '#view'));
?>