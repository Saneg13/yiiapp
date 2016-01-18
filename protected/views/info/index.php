<?php
/* @var $this InfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Информация',
);

$this->menu=array(
	array('label'=>'Создать инфо-блок', 'url'=>array('create')),
	array('label'=>'Управление информацией', 'url'=>array('admin')),
);
?>

<h1>Информация</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
