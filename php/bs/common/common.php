<?php 
session_start();
define('BASE_PATH',str_replace(array('\\','/'), DIRECTORY_SEPARATOR, dirname(__DIR__)));
//echo BASE_PATH;


$includes = [
	'/config/1.php',
	'/config/config.php',
	'/config/database.php',
];



//加载包含文件
foreach ($includes as $files) {

	$path = BASE_PATH.$files;

	//echo $path;
	
	if(!file_exists($path)){
		include $path;
			echo $path;
		
		
	}
	
}
 $conn =db($host,$user,$pwd,$dbname);
echo "123";
var_dump($conn);


 ?>