<?php
/*
* Created by PhpStorm.
* User: sanek
* Date: 08.07.15
* Time: 20:32
*/

?>

<!DOCSTYLE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Страница для тестов</title>
	<link rel="stylesheet" type="text/css" href="/css/my_css.css" ><link rel="stylesheet" type="text/css" href="/css/my_css.css" >
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>

    <script type="text/javascript" src="/js/jquery-1.5.2.min.js"></script>
    <script src="/js/my_script.js" async></script>

</head>
<body>
<h1>For test</h1>
<div>
    <?php

    print $cost1."<br />";

    print $cost2."<br />";
    ?>
</div>

<p>Всякая ерунда, для проверки. </br> </p>
<!--Ready to start script-->
<button onclick="loadPhones()" id="button">Load phones.json!</button>
</body>
</html>