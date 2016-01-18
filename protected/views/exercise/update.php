<?php
/* @var $this ExerciseController */
/* @var $model Exercise */

$this->breadcrumbs=array(
    'Упражнения'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Обновить',
);

$this->menu=array(
    array('label'=>'Список упражнений', 'url'=>array('index')),
    array('label'=>'Создать упражнение', 'url'=>array('create')),
    array('label'=>'Просмотр упражнений', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Управление упражнениями', 'url'=>array('admin')),
);
?>

    <h3>Обновить упражнение №<?php echo $model->id; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>