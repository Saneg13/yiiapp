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

    <div class="clearfix"><h2>Создать упражнение</h2></div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>