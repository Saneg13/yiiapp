<?php
/* @var $this ExerciseController */
/* @var $model Exercise */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exercise-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Поля со звездочкой <span class="required">*</span> должны быть заполнены.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'theme'); ?>
		<?php echo $form->textField($model,'theme',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditions'); ?>
		<?php echo $form->textArea($model,'conditions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conditions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decision'); ?>
		<?php echo $form->textArea($model,'decision',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'decision'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->