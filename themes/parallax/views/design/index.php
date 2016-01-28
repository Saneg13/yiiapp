<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 28.01.16
 * Time: 10:49
 */
?>

<header>
    <br/>
    <h1>Dynamic parallax slider with Yii</h1>

</header>
<div id="da-slider" class="da-slider">
        <?php $DEFAULT_IMAGE = Yii::app()->request->baseUrl.'/images/icons/default_avatar.png';
        foreach ($list as $value) {
            if ($value->icon =='')
            {
                $value->icon = $DEFAULT_IMAGE;
            }
            echo '<div class="da-slide">';
            echo '<h2>'.$value->user_name.'</h2>';
            echo '<p>'.$value->user_name.' live at '.$value->user_address.'</p>';
            echo CHtml::link('Read more', array('info/view', 'id'=>$value->id), array('class' => 'da-link'));
            echo CHtml::image(Yii::app()->request->baseUrl.$value->icon,'',
                array(
                    //'width'=>'140px',
                    'height'=>'320px',
                    'title'=>$value->user_name.' live at '.$value->user_address,
                    'class'=>'da-img'
                ));
            echo '</div>';
        } ?>

    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/parallax/views/system/js/jquery.cslider.js"></script>
<script type="text/javascript">
    $(function() {

        $('#da-slider').cslider({
            autoplay	: true,
            bgincrement	: 400
        });

    });
</script>