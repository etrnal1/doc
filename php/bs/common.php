<?php
session_start();
define('WEB_SITE',str_replace('\\','/',__DIR__).'/');

$database = include WEB_SITE.'config/config.php';


include WEB_SITE . 'config/database.php';

$conn = connect(
		$database['DB_HOST'],
		$database['DB_USER'],
		$database['DB_PWD'],
		$database['DB_NAME'],
		$database['DB_CHARSET']
		);