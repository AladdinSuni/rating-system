<?php 
//change the values with your own hosting setting
 $mysql_host = "localhost";
 $mysql_database = "wcd_rating";
 $mysql_user = "root";
 $mysql_password = "102030";

 $db = mysql_connect($mysql_host,$mysql_user,$mysql_password);
 mysql_connect($mysql_host,$mysql_user,$mysql_password);
 mysql_select_db($mysql_database);
?>