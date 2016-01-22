<?php
/* @var $this ExerciseController */
/* @var $model Exercise */
Yii::app()->syntaxhighlighter->addHighlighter();

$this->breadcrumbs=array(
    'Упражнения'=>array('index'),
    $model->theme,
);

$this->menu=array(
    array('label'=>'Список упражнений', 'url'=>array('index')),
    array('label'=>'Создать упражнение', 'url'=>array('create')),
    array('label'=>'Обновить упражнение', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Удалить упражнение', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить эту запись?')),
    array('label'=>'Управление упражнениями', 'url'=>array('admin')),
);
?>

    <div class="clearfix"><h2>Упражнение №<?php echo $model->id; ?>. <?php echo $model->theme; ?></h2></div>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        //'id',
        //'theme',
        'conditions',
        //'decision',
    ),
)); ?>
<?php $this->widget('SHDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'decision',
    ),
)); ?>