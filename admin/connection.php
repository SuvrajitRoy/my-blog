<?php
$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_database="blog";
$prefix="";
$bd=mysql_connect($mysql_hostname,$mysql_user,$mysql_password)or die("can not connect database");;
mysql_select_db($mysql_database,$bd) or die("cannot select DB");
?>