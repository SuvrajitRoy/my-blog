<?php

// Get the database details

include_once('config.php');

// Connect to Database

mysql_connect('localhost', 'root', ''); 
mysql_select_db('blog');

include_once('func/blog.php');


?>