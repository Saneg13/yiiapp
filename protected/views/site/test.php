<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 27.08.15
 * Time: 21:17
 */
include "show.php";
?>

<!DOCSTYLE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
    <title>Страница с AJAX-запросом</title>
    <link rel="stylesheet" type="text/css" href="/css/my_css.css" ><link rel="stylesheet" type="text/css" href="/css/my_css.css" >
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body>
<form id="myForm">
    Выберите :<br/>
    <select id="user_name">
        <?php
        //Выводим
        while ($row=mysql_fetch_array($result))
        {
            print "<option value=".$row['user_name'].">";
            print $row['Name'];
            echo("</option>");
        }
        ?>
    </select>
</form>

<div id="content"></div>

<script>
    $(document).ready(function(){

        $('#user_name').change(function(){
            $.ajax({
                type: "POST",
                url: "show.php",
                data: "user_name="+$("#user_name").val(),
                success: function(html){
                    $("#content").html(html);
                }
            });
            return false;
        });

    });
</script>
<!-- Show Message for AJAX response -->
<!--<div id="insert_response"></div>-->
<!-- Form: the action="javascript:insert()"calls the javascript function "insert" into ajax_framework.js -->
<!--<form action="javascript:insert()" method="post">
    <input name="name" type="text" id="name" value=""/><br />
    <input name="address" type="text" id="address" value=""/><br />
    <input name="lat" type="text" id="lat" value=""/><br />
    <input name="lng" type="text" id="lng" value=""/><br />
    <input type="submit" name="Submit" value="Insert"/><br />
</form>-->
</body>
</html>