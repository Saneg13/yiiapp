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

<h1>Создать инфо-блок</h1>

<?php /*$this->renderPartial('_new', array('model'=>$model)); */?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
