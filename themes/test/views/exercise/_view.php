<?php
/* @var $this ExerciseController */
/* @var $data Exercise */

Yii::app()->syntaxhighlighter->addHighlighter(); ?>


<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('theme')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->theme), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('conditions')); ?>:</b>
    <?php echo CHtml::encode($data->conditions); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('decision')); ?>:</b>
	<pre class="brush : php">
            <?php echo CHtml::encode($data->decision); ?>
        <br />
    </pre>

</div>