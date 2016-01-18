<?php
/* @var $this InfoController */
/* @var $model Info */

$this->breadcrumbs=array(
	'Информация'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список информации', 'url'=>array('index')),
	array('label'=>'оздать инфо-блок', 'url'=>array('create')),
	array('label'=>'Просмотр информации', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление информацией', 'url'=>array('admin')),
);
?>

<h1>Update Info <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>