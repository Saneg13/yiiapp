<?php
/* @var $this ExerciseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Упражнения',
);

$this->menu=array(
    array('label'=>'Создать упражнение', 'url'=>array('create')),
    array('label'=>'Управление упражнениями', 'url'=>array('admin')),
);
?>

    <h3>Упражнения</h3>
    <p>
        В данном разделе будут представлены <b>упражнения по php</b> с фрагментами исходного кода в виде решения.
        Материал взят из мануалов и тематических форумов.
    </p>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
));
?>