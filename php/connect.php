<?php 
define(DB_HOST, '127.0.0.1');

define(DB_NAME,'liu');
define(DB_USER, 'root');
define(DB_PWD, 'w123');

function connect(DB_HOST,DB_USER,DB_PWD,DB_NAME
	){


	$conn =mysqli_connect('DB_HOST','DB_USER','DB_PWD');

	if(!$conn){

		die('数据库连接失败');
	}
	$result = mysqli_selected($conn,DB_NAME);

	if(!result){

		die('选择数据库失败');

	}



}



 ?>