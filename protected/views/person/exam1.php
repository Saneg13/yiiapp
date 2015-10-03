<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 11.09.15
 * Time: 22:41
 */

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <link href="/css/my_css.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
CHtml::ajax(array(
    'id'=>'person_list',
    'type'=>'POST',
    'url'=>CController::createUrl('countries/findallperson'),
    'update'=>'#prsnlist',
    'data'=>'js:jQuery(this).serialize()',  // only send element name, not whole form
));
echo CHtml::textArea('prsnlist', '');
?>
</body>
</html>