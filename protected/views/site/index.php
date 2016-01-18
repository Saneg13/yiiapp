<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<body>
<div id="header">
    <div id="SinoptikInformer" style="width:260px;" class="SinoptikInformer type1c1 htic1">
        <div class="siHeader">
            <div class="siLh">
                <div class="siMh"><a onmousedown="siClickCount();" href="https://sinoptik.ua/" target="_blank">Погода</a><a
                        onmousedown="siClickCount();" class="siLogo" href="https://sinoptik.ua/" target="_blank"> </a> <span
                        id="siHeader"></span></div>
            </div>
        </div>
        <div class="siBody">
            <table>
                <tbody>
                <tr>
                    <td class="siCityV" style="width:100%;">
                        <div class="siCityName"><a onmousedown="siClickCount();"
                                                   href="https://sinoptik.ua/погода-харьков" target="_blank">Погода
                                в <span>Харькове</span></a>
                </tr>
                <tr>
                    <td style="width:100%;">
                        <div class="siCityV2">
                            <div id="siCont0" class="siBodyContent">
                                <div class="siLeft">
                                    <div class="siTerm"></div>
                                    <div class="siT" id="siT0"></div>
                                    <div id="weatherIco0"></div>
                                </div>
                                <div class="siInf"><p>влажность: <span id="vl0"></span></p>

                                    <p>давление: <span id="dav0"></span></p>

                                    <p>ветер: <span id="wind0"></span></p></div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="siFooter">
                <div class="siLf">
                    <div class="siMf"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript" charset="UTF-8"
                src="//sinoptik.ua/informers_js.php?title=1&amp;wind=3&amp;cities=303010783,303027839,303013956&amp;lang=ru"></script>
    </div>
</div>
<br/><h3>Добро пожаловать в <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h3>

<p>Веб-приложение продолжает развитие.</p>

<!--<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php /*echo __FILE__; */?></code></li>
	<li>Layout file: <code><?php /*echo $this->getLayoutFile('main'); */?></code></li>
</ul>

<!--<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>-->
</body>