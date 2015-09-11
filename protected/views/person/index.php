
<div id="view">
    <?php
    $myValue2;
    $myValue3;

    $this->renderPartial('_ajaxContent', array('myValue1'=>$myValue)); ?>
</div>

<?php echo CHtml::ajaxButton ("Жмакни сюды",
    CController::createUrl('Person/UpdateAjax'),
    array('update' => '#view'));
?>