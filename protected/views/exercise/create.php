<?php
/* @var $this ExerciseController */
/* @var $model Exercise */

$this->breadcrumbs=array(
    'Упражнения'=>array('index'),
    'Создать',
);

$this->menu=array(
    array('label'=>'Список упражнений', 'url'=>array('index')),
    array('label'=>'Управление упражнениями', 'url'=>array('admin')),
);
?>

    <h3>Создать упражнение</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>