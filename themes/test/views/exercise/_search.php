<?php
/* @var $this ExerciseController */
/* @var $model Exercise */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'Тема упражнения'); ?>
        <?php echo $form->textField($model,'theme',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Условие задания'); ?>
        <?php echo $form->textArea($model,'conditions',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Решение'); ?>
        <?php echo $form->textArea($model,'decision',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Поиск'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->