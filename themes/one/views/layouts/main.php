<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/style/nivo-slider.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/style/jquery.qtip.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/style/jquery.captify.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/style/jquery.jScrollPane.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/style/fancybox/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/style/base.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/style/page.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.easing.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.captify.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.blockUI.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.bxSlider.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.jScrollPane.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/script.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/jquery.cascadeLanding.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/script/main.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/one/views/system/plugin/contact-form/contact-form.js"></script>

<!--    <title>THEMELOCK.COM - Free Themes & Templates</title>-->

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!--<div id="logo"><?php /*echo CHtml::encode(Yii::app()->name); */?></div>-->
    <meta charset="UTF-8">
</head>

<body>

<div class="container" id="page">

<!--    <div id="header">-->
<!--        -->
<!--    </div><!-- header -->

    <!-- Header -->
    <div class="header main box-center">

        <div class="layout-50 clear-fix overflow-fix">

            <div class="layout-50-left">
                <h1>Anna Brown</h1>
                <h5>professional photographer &amp; web developer</h5>
            </div>

            <div class="layout-50-right">
                <ul class="no-list header-menu">
                    <li class="header-menu-phone">1.800.353.252</li>
                    <li class="header-menu-mail">anna.brown@mail.com</li>
                </ul>
            </div>

        </div>

    </div>
    <!-- /Header -->

    <?php echo $content; ?>

    <div class="clear"></div>

    <!-- Footer -->
    <div class="footer">

        <hr class="footer-line" />

        <div class="main box-center layout-7030 clear-fix overflow-fix">

            <!-- Latest tweets -->
            <div class="layout-7030-left latest-tweets">
                <div id="latest-tweets"></div>
            </div>
            <!-- /Latest tweets -->

            <!-- Social icons -->
            <div class="layout-7030-right">

                <ul class="no-list social-list">
                    <li>Connect</li>
                    <li><a href="#" class="social-rss"></a></li>
                    <li><a href="#" class="social-facebook"></a></li>
                    <li><a href="#" class="social-twitter"></a></li>
                    <li><a href="#" class="social-google"></a></li>
                    <li><a href="#" class="social-skype"></a></li>
                </ul>

            </div>
            <!-- /Social icons -->

        </div>

    </div>
    <!-- /Footer -->

</body>
</html>