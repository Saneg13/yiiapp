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

<div class="clearfix"><h2>Информация</h2></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
