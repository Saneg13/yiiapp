<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 21.01.16
 * Time: 16:59
 */
Yii::app()->syntaxhighlighter->addHighlighter();
?>
<body>

<div class="clearfix"><h2>Установка шаблона CSS. Исходный код темы для Yii</h2></div>
<div id="stripe"></div>
<p>Находится в разработке..</p><hr/>
<h3>Шаг 1: Выбор шаблона CSS</h3>
<p>
    Сначала отправляемся на поиски необходимого нам шаблона, для будущего сайта.
    Здесь нужно определиться с тематикой. В качастве исходника остановимся на
    <a href="http://html-templates.info/personal-html-templates/super-sovremennyiny-html-personalnogo-sayta" title="link">шаблоне для портфолио</a>.
    Скачать данный шаблон можно <a href="http://html-templates.info/docs/items/140605092655.zip" title="download">здесь</a> или в футере сайта.
    Либо поискать более подходящий <a href="http://www.free-css.com/free-css-templates" title="link">здесь</a>.
</p><br/><hr/>
<h3>Шаг 2: Подготовка к установке шаблона</h3>
<p>
    После того, как определились с названием будущей темы, создаем каталог : <b>/themes/имя_вашей_темы</b>.
    Папки в каталоге располагаются следующим образом:
    <h6>view</h6>
    <ul>
    <li>/layouts</li>
    <li>/site</li>
    <li>/system</li>
    </ul>
</p>
<p>
    Так как имена разделов в шаблоне похожи на те, которые идут "из коробки" в Yii, копируем файлы из /protected/views/site в /themes/test/views/site.
    Еще нужны будут layouts-файлы. Копируем из /protected/views/layouts в /themes/test/views/layouts.
    Это нам позволяет, при отсутствии какого-либо файла представлений, обратиться в исходный каталог и использовать файлы напрямую.
    Чтобы темы отличались нужно обязательно скопировать всю дерикторию /layouts.
    Потом распаковываем архив с шаблоном во /view/system нашей темы.
</p><br/><hr/>
<h3>Шаг 3: Пути для скриптов и изображений</h3>
<p>
    Открываем файл /themes/имя_вашей_темы/system/Template/Style-1/index.html. Определяем разметку страницы по id header, footer и т.д.
    Открываем файл /themes/имя_вашей_темы/views/layouts/main.php. Удаляем данные из header'a. Копируем из index.html следующее:

<pre class="brush : html">
<?php echo CHtml::encode('
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>THEMELOCK.COM - Retail Only Themes & Templates</title>

  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
  <link rel="stylesheet" type="text/css" media="print" href="css/print.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="css/prettyPhoto.css"/>
  ...
<!--Input losses scripts-->
  ...
  <!--[if lt IE 7]>
  <link rel="stylesheet" type="text/css" media="screen" href="css/ie-fix.css"/><![endif]-->
  <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.tweet.js"></script>
  <script type="text/javascript" src="js/jquery.ScrollTo.js"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.quicksand.js"></script>
  <script type="text/javascript" src="js/jquery.quicksand-config.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  </head>

  <body>
    <div id="page-shadow">
    <div id="page">
    <div class="content-innertube">
    <div id="header">

      <h1>John William Doe</h1>

      <ul id="main-nav">
        <li class="current"><a href="index.html">Resume</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="project.html">Project</a></li>
        <li><a href="about.html">About me</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <div class="clear"></div>
    </div><!-- header end -->
'); ?>
</pre>
<p>
    Теперь копируем footer-часть кода.
</p>
<pre class="brush : html">
<?php echo CHtml::encode('
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
          <li><a href="contact.php">Contact form<span class="raquo">&#187;</span></a></li>
        </ul>
        </div><!-- footer-contact end -->

        <div id="footer-social">
          <h5>Social</h5>
        <ul>
          <li><a href="#" title=""><img src="img/twitter.png" alt="twitter"
                                                      title="My Twitter profile"></a></li>
          <li><a href="#" title=""><img src="img/facebook.png" alt="facebook" title="My Facebook profile"></a>
          </li>
          <li><a href="#" title=""><img src="img/flickr.png" alt="flickr" title="My Flickr profile"></a>
          </li>
          <li><a href="#" title=""><img src="img/linkedin.png" alt="linkedin" title="My Linkedin profile"></a>
          </li>
        </ul>
        </div><!-- footer-social end -->

        <div id="footer-resume">
          <h5>My resume</h5>

        <div id="download-resume"><a href="#"></a></div>
        </div><!-- footer-resume end -->

        <div class="clear"></div>

        <ul id="footer-nav">
          <li><a href="index.html">Resume</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="about.html">About me</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>

        <div id="go-top"></div>
        <div class="clear"></div>

    </div><!-- footer-innertube end -->
    </div><!-- footer end -->
</div><!-- page end -->
</div><!-- page-shadow end -->

</body>
</html>
'); ?>
<br />
</pre>
</p>
<p>
    На данном этапе на странице не отображаются стили, изображения, не работают JS-скрипты.
    Подключаем скрипты в /layouts/main.php с помощью :
    <pre class="brush : php">
            <?php echo CHtml::encode('echo Yii::app()->theme->baseUrl; '); ?>
        <br />
</pre>
</p><br/>
<p>
    Так же не забываем использовать стандартное меню Yii, установив его в "Menu place".
    Используйте стандартную Контактную форму из "/site/contact".
</p>
<pre class="brush : html">
<?php echo CHtml::encode('
  <meta http-equiv="Content-Type" content="text/html">
    <meta name="language" content="en">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!--Change title on Yii-->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

<!--connect scripts with "<?php echo Yii::app()->theme->baseUrl; ?>/"-->

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/css/main.css" />
    <link rel="stylesheet" type="text/css" media="print" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/css/print.css"  />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/system/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/views/site/contact-form/formValidator/validationEngine.jquery.css" />
    ...
<!--Input losses scripts-->
    ...
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
        <h1>John William Doe</h1>
    <br/>
    <ul id="main-nav">

<!--Menu place-->
<!--Input default "zii.widgets.CMenu" from Yii, don`t remember add actions & view in controller-->
<!--Use default Yii Contact form with "/site/contact"-->

    </ul><!--end menu-->
    </div><!-- header end -->

<!--Input $content between two "clear div`s" -->
    <div class="clear"></div><br/>
    <?php echo $content; ?>
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

<div id="go-top"></div>

<div class="clear"></div>
</div><!-- footer-innertube end -->

</div><!-- footer end -->
</div><!-- page end -->
</div><!-- page-shadow end -->

</body>
</html>

<!--That`s all main template-->

'); ?>
<br />
</pre>
<p>
    На этом можно завершить изменения в файле /layouts/main.php.
    Так же есть возможность убрать виджет в /layouts/column1.php.
    Теперь у нас есть готовый шаблон, который можно наполнять контентом.
</p>
<p></p>
<pre class="brush : php">
<?php echo CHtml::encode('

'); ?>
<br />
</pre>
<p></p>
<pre class="brush : html">
<?php echo CHtml::encode(''); ?>
<br />
</pre>
<?php

?>
</body>