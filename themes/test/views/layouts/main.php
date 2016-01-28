<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="language" content="en">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/test/views/system/css/main.css" />

    <link rel="stylesheet" type="text/css" media="print" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/css/print.css"  />

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/css/prettyPhoto.css" />

    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/site/contact-form/formValidator/validationEngine.jquery.css" />

    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/css/ie-fix.css" /><![endif]-->

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/jquery-1.5.2.min.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/jquery.tweet.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/jquery.ScrollTo.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/jquery.prettyPhoto.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/jquery.easing.1.3.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/jquery.quicksand.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/jquery.quicksand-config.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/js/scripts.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/site/contact-form/formValidator/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/views/site/contact-form/script.js"></script>

</head>

<body>

<div id="page-shadow">

    <div id="page">

        <div class="content-innertube">

            <div id="header">
                <h3>Пример установки дизайна на Yii</h3><br/>
                <h1>John William Doe</h1>
                <br/>
                <ul id="main-nav">
                <?php
                $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Resume', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Portfolio', 'url'=>array('/site/portfolio')),
                        array('label'=>'Project', 'url'=>array('/site/project')),
                        array('label'=>'Exercise', 'url'=>array('/exercise/index')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                ));
                ?>
                </ul><!--end menu-->

            </div><!-- header end -->

            <div class="clear"></div><br/>

            <?php echo $content; ?>

            <div class="clear"></div>
            <hr/><h6>Для перехода в часть сайта с Classic-темой выберите пункт <b>Меню->Exercise</b></h6><hr/>
            <div class="clear"></div>

        </div><!-- content-innertube end -->

        <div class="clear"></div>

        <div id="footer">

            <div id="footer-innertube">

                <div id="footer-address">
                    <h5>Address</h5>
                    <ul>
                        <li>123 Street Address,</li>
                        <li>Lovely City,</li>
                        <li>My Country</li>
                    </ul>
                </div><!-- footer-address end -->

                <div id="footer-contact">
                    <h5>Contact</h5>
                    <ul>
                        <li>000 123 456 789</li>
                        <li><a href="mailto:#" title="Send me an email">address@email.com</a></li>
                    </ul>

                    <h5>Help</h5>
                    <ul>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/source">Instructions settings<span class="raquo">&#187;</span></a></li>
                    </ul>
                </div><!-- footer-contact end -->

                <div id="footer-social">
                    <h5>Social</h5>
                    <ul>
                        <li><a href="#" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/img/twitter.png" alt="twitter" title="My Twitter profile"></a></li>
                        <li><a href="#" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/img/facebook.png" alt="facebook" title="My Facebook profile"></a></li>
                        <li><a href="#" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/img/flickr.png" alt="flickr" title="My Flickr profile"></a></li>
                        <li><a href="#" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/img/linkedin.png" alt="linkedin" title="My Linkedin profile"></a></li>
                    </ul>
                </div><!-- footer-social end -->

                <div id="footer-resume">
                    <h5>My CSS template</h5>
                    <div id="download-resume"><a href="http://html-templates.info/docs/items/140605092655.zip"></a></div>
                </div><!-- footer-resume end -->

                <div class="clear"></div>

                <ul id="footer-nav">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index">Resume</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/portfolio">Portfolio</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/project">Project</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/page?view=about">About me</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contact">Contact us</a></li>
                </ul>

                <div></div>

                <div id="go-top"></div>

                <div class="clear"></div>

            </div><!-- footer-innertube end -->

        </div><!-- footer end -->

    </div><!-- page end -->

</div><!-- page-shadow end -->

</body>
</html>