
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <link href="/css/my_css.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#example-3').click(function(){
            jQuery.post('/js/some.xml', {}, function(xml){
                jQuery('#example-3').html('');
                jQuery(xml).find('note').each(function(){
                    jQuery('#example-3').append('To: '   + $(this).find('to').text() + '<br/>')
                        .append('From: ' + $(this).find('from').text() + '<br/>')
                        .append('<b>'    + $(this).find('heading').text() + '</b><br/>')
                        .append(           $(this).find('body').text() + '<br/>');
                });
            }, 'xml');
        })
    });
</script>
<div class="example cursor" id="example-3">Загрузить данные XML</div>
</body>
</html>