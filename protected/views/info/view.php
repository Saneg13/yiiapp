<?php
/* @var $this InfoController */
/* @var $model Info */

$this->breadcrumbs=array(
	'Информация'=>array('index'),
	$model->user_name,
);

$this->menu=array(
	array('label'=>'Списко информации', 'url'=>array('index')),
	array('label'=>'Создать инфо-блок', 'url'=>array('create')),
	array('label'=>'Обновить информацию', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить информацию', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление информацией', 'url'=>array('admin')),
);
?>

<h1>Просмотр информации #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_name',
		'user_address',
		'lat',
		'lng',
		'icon',
	),
)); ?>
