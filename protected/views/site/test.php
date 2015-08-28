<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 27.08.15
 * Time: 21:17
 */

?>

<!DOCSTYLE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Страница с картой</title>
    <link rel="stylesheet" type="text/css" href="/css/my_css.css" ><link rel="stylesheet" type="text/css" href="/css/my_css.css" >
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style>
        html, body
        }
    </style>
    <!-- Include AJAX Framework -->
    <script src="/js/ajax_framework.js" language="javascript"></script>
</head>
<body>
<!-- Show Message for AJAX response -->
<div id="insert_response"></div>
<!-- Form: the action="javascript:insert()"calls the javascript function "insert" into ajax_framework.js -->
<form action="javascript:insert()" method="post">
    <input name="name" type="text" id="name" value=""/><br />
    <input name="address" type="text" id="address" value=""/><br />
    <input name="lat" type="text" id="lat" value=""/><br />
    <input name="lng" type="text" id="lng" value=""/><br />
    <input type="submit" name="Submit" value="Insert"/><br />
</form>
</body>