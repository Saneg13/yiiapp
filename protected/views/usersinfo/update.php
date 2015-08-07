<?php
/* @var $this UsersinfoController */
/* @var $model Usersinfo */

$this->breadcrumbs=array(
	'Usersinfos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usersinfo', 'url'=>array('index')),
	array('label'=>'Create Usersinfo', 'url'=>array('create')),
	array('label'=>'View Usersinfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Usersinfo', 'url'=>array('admin')),
);
?>

<h1>Update Usersinfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>