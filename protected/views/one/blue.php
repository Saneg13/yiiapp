<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 24.01.16
 * Time: 17:43
 */
?>

<div class="layout-50 overflow-fix clear-fix blue">

    <h3>About</h3>

    <div class="layout-50-left">

        <p class="top-0">

            Proin eu eros ut neque mattis facilisis in sit amet turpis.
            Aenean vitae malesuada libero.
            Mauris in risus vitae nibh pulvinar eleifend lacinia sit amet nulla.
            Integer adipiscing varius dapibus. Donec erat mi, aliquet placerat pulvinar vel.

            <br/><br/>

            Fusce aliquam dignissim metus vel faucibus.
            Aenean sed sem felis, vitae laoreet lacus.
            Mauris in nibh eu quam aliquet aliquam imperdiet ac est.
            Nunc placerat vulputate placerat.

        </p>

        <ul class="no-list social-list">
            <li class="social-list-twitter">
                <span>Twitter Profile</span>
                <a href="http://twitter.com/anna.brown">http://facebook.com/anna.brown</a>
            </li>
            <li class="social-list-facebook">
                <span>Facebook Profile</span>
                <a href="http://facebook.com/anna.brown">http://facebook.com/anna.brown</a>
            </li>
        </ul>

    </div>

    <div class="layout-50-right">

        <div id="sliderBox">

            <div id="slider">

                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/image/_sample/slider_img1.jpg" alt="" />
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/image/_sample/slider_img2.jpg" alt="" />
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/image/_sample/slider_img3.jpg" alt="" />

            </div>

        </div>

    </div>

</div>