<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 27.08.15
 * Time: 21:28
 */

/*Include Database connections info.*/
include('connect_db.php');
/*Verify if user exists for login*/
if(isset($_GET['user_name']) && isset($_GET['user_address']) && isset($_GET['lat'] && isset($_GET['lng'])){
    $user_name= $_GET['user_name'];
    $user_address= $_GET['user_address'];
    $lat= $_GET['lat'];
    $lng= $_GET['lng'];
    $insertUser_sql = 'INSERT INTO INFO (user_name, user_adress, lat, lng) VALUES('. $user_name. ',' . $user_address. ')';
    $insertSite= mysql_query($insertUser_sql) or die(mysql_error());
    /*If is set URL variables and insert is ok, show the site name*/
echo $user_name;
} else {
    echo 'Error! Please fill all fields!';
}
