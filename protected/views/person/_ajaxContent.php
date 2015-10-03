<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.09.15
 * Time: 22:10
 */

echo $myValue1;
/*echo $myValue3;*/
foreach($myValue3 as $key => $value) {
    echo $value['name'], '. Возраст: ', $value['age'], '<br />';
}