<?php
/* @var $this UsersinfoController */
/* @var $model Usersinfo */

$this->breadcrumbs=array(
	'Usersinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usersinfo', 'url'=>array('index')),
	array('label'=>'Manage Usersinfo', 'url'=>array('admin')),
);
?>

<h1>Create Usersinfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>