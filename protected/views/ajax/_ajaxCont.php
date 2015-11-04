<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 01.11.15
 * Time: 16:20
 */
$DEFAULT_IMAGE = '/images/icons/avatar-default-icon.png';
foreach ($infoList as $value) {
    if ($value->icon =='')
    {
        $value->icon = $DEFAULT_IMAGE;
    }
    echo '<br /><b>'.$value->user_name.' live at '.$value->user_address.'</b><br />'.CHtml::image(Yii::app()->request->baseUrl.$value->icon,'',
            array('width'=>'160px','height'=>'160px','title'=>'image title')).'<br />';

    /*echo CHtml::image(Yii::app()->request->baseUrl.$value->icon,
        'alt tag',
        array('width'=>'200px','height'=>'160px','title'=>'image title'));*/

    // echo '<div><b>User: '.$value->user_name.'</b><br />Who live in <u>'.$value->user_address.'</u><br />'.CHtml::image($value->icon).'<br /></div>';
}