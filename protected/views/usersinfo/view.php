<?php
/* @var $this UsersinfoController */
/* @var $model Usersinfo */

$this->breadcrumbs=array(
	'Usersinfos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Usersinfo', 'url'=>array('index')),
	array('label'=>'Create Usersinfo', 'url'=>array('create')),
	array('label'=>'Update Usersinfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Usersinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usersinfo', 'url'=>array('admin')),
);
?>

<h1>View Usersinfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'place',
	),
)); ?>
