<?php
/* @var $this InfoController */
/* @var $model Info */

$this->breadcrumbs=array(
	'Информация'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список информации', 'url'=>array('index')),
	array('label'=>'Управление инфрмацией', 'url'=>array('admin')),
);
?>

<div class="clearfix"><h2>Создать инфо-блок</h2></div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>