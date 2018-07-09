<?php 
session_start();
session_id($_GET['sid']);

//echo "13";
define('WEB_SITE',str_replace('\\','/',__DIR__).'/');

$database = include WEB_SITE.'config/config.php';


include WEB_SITE . 'config/database.php';



//connect();

$conn = connect(
		$database['DB_HOST'],
		$database['DB_USER'],
		$database['DB_PWD'],
		$database['DB_NAME'],
		$database['DB_CHARSET']
		);

 

include 'tpl/index.php';
 ?>