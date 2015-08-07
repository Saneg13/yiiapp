<?php
/* @var $this UsersinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usersinfos',
);

$this->menu=array(
	array('label'=>'Create Usersinfo', 'url'=>array('create')),
	array('label'=>'Manage Usersinfo', 'url'=>array('admin')),
);
?>

<h1>Usersinfos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
