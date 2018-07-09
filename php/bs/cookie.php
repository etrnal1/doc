<?php 
$url='http://www.baidu.com/';
$html=file_get_contents($url);
print_r($http_response_header);
ec($html);
printhr();

die();
$username = 'liwen';
$password = '123';
if ($username == 'liwen'  && $password=='123') {
	setcookie("username",'liwen',time()+3600);
	echo "string";
}

var_dump($_COOKIE['username']);

 ?>