

<br/><h3>Добро пожаловать в <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h3>
<p>Работа с установкой тем</p>

<?php
/*foreach ($a->themeNames as $theme){
    $theme;
}*/
var_dump($a->themeNames);
echo $a->themeNames[0];
echo '<br/>';
echo $a->themeNames[1];
echo '<br/>';