<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="ru">

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <!--for enable bootstrap uncomment next code-->
    <!--<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
    <!--add my css style-->
    <link rel="stylesheet" type="text/css" href="/css/my_css.css" >

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <div id="header">
        <!--<div id="logo"><?php /*echo CHtml::encode(Yii::app()->name); */?></div>-->
        <div>
            <?php
            $image1 = CHtml::image('/images/logo.png',
                'CHtml::encode(Yii::app()->name)',
            array(
                'width'=>'172px',
                'height'=>'100px',
                'title'=>CHtml::encode(Yii::app()->name),
            ));
            $image2 = CHtml::image('/images/knitting-blog-logo.png',
                'CHtml::encode(Yii::app()->name)',
                array(
                    'width'=>'320px',
                    'height'=>'100px',
                    'title'=>'Блог о вязании',
                ));
            $image3 = CHtml::image('/images/japan-watch-logo.png',
                'CHtml::encode(Yii::app()->name)',
                array(
                    'width'=>'275px',
                    'height'=>'100px',
                    'title'=>'Japan Watch Store',
                ));
            echo CHtml::link($image1,'http://saneg13-test-site.pp.ua');
            echo CHtml::link($image2,'http://saneg13-test-site.pp.ua/wp_blog');
            echo CHtml::link($image3,'http://saneg13-test-site.pp.ua/oc_shop');
            ?>

    </div><!-- header -->

    <div id="mainMbMenu">
        <?php
        $image1 = CHtml::image('/images/small-logo-100x75.png',
            'CHtml::encode(Yii::app()->name)',
            array(
                'width'=>'23px',
                'height'=>'13px',
                'title'=>CHtml::encode(Yii::app()->name),
            ));
        $this->widget('application.extensions.mbmenu.MbMenu',array(
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>$image1.' Домой', 'url'=>array('/site/index')),
                array('label'=>$image1.' ООП игра Арена', 'url'=>array('/test/arena')),
                array('label'=>$image1.' Работа с картами', 'url'=>array('/test/gmap1'), 'items'=>array(
                    array('label'=>$image1.' My first map', 'url'=>array('/test/gmap1')),
                    array('label'=>$image1.' GM API + MySQL', 'url'=>array('/test/gmap2')),
                    array('label'=>$image1.' GM API + jQuery + XML', 'url'=>array('/test/gmap3')),
                    array('label'=>$image1.' Simple Yandex Map', 'url'=>array('/test/ymap'), 'items'=>array(
                        array('label'=>$image1.' Invalid action 1', 'url'=>array('/test/test')),
                        array('label'=>$image1.' Invalid action 2', 'url'=>array('/test/test2')),
                    )),
                )),
                array('label'=>$image1.' Работа с БД', 'url'=>array('/exercise/index'), 'items'=>array(
                    array('label'=>$image1.' Упражнения', 'url'=>array('/exercise/index')),
                    array('label'=>$image1.' Parallax slider w/ Db', 'url'=>array('/design/index')),
                    array('label'=>$image1.' Info data (CRUD)', 'url'=>array('/info/index')),
                    array('label'=>$image1.' w/ renderPartial', 'url'=>array('/person/index')),
                    array('label'=>$image1.' w/ Drag&Drop', 'url'=>array('/test/dragdrop')),
                )),
                // array('label'=>$image1.' Contact', 'url'=>array('/site/contact')),
                array('label'=>'О сайте', 'url'=>array('/site/page', 'view'=>'about'), 'items'=>array(
                    array('label'=>$image1.' CSS test', 'url'=>array('/test/css')),
                )),
                array('label'=>$image1.' Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>$image1.' Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        )); ?>
    </div><!-- mainmenu -->
    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        <b>Copyright &copy; 2015 - <?php echo date('Y'); ?> by SaNeG13.</b><br/>
        <!--All Rights Reserved.-->
        <br/>
        <b><?php echo Yii::powered(); ?></b><br/>
        <hr/><h6>Для перехода в часть сайта с Test-темой выберите пункт Меню :</h6><hr/>
        <b><ul>
                <h6><li>Домой</li></h6>
                <h6><li>О сайте</li></h6>
                <h6><li>Login/Logout</li></h6>
        </ul></b>
        <!--                --><?php //echo CHtml::button('Classic Theme', array('submit' => array('/site/myclassictheme'))); ?>
        <!--                --><?php //echo CHtml::button('Test Theme', array('submit' => array('/site/mytesttheme'))); ?>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>