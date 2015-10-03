<?php
/* @var $this InfoController */
/* @var $data Info */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lng')); ?>:</b>
	<?php echo CHtml::encode($data->lng); ?>
	<br />


</div>