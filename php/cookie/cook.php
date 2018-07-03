<?php 
$username = $_POST['username'];

$password= $_POST['password'];

if($username == 'lili ' && $password == 'hahh'){
	setcookie('username','haha',time()+3600,'/');

	echo "登录成功";
}


echo '登录成功'；
 ?>