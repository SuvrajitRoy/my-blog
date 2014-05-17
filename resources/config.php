<?php

$config['db_host'] = 'loacalhost';
$config['db_user'] = 'root';
$config['db_pass'] = '';
$config['db_name'] = 'blog';

foreach( $config as $k => $v){
	define(strtoupper($k), $v);
}


