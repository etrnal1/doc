<?php 
//完成注册
include  'config.php';

$conn  =mysqli_connect('localhost','root','root');

   $re = mysqli_select_db($conn,'bl');
   if(!$re){
   	die('数据库选择失败');
   }
//echo "12";
if($_POST['zhuce']  == '注册'){

	$name = trim($_POST['username']);
	 $pwd  = md5($_POST['password']);
	$time  = time();

	 //$ip  = ip2long($_SERVER['REMOTE_ADDR']);

	 //var_dump(ip2long($_SERVER['REMOTE_ADDR']));
	 $sql  = "insert into user (username,password,time) values('$name','$pwd',$time)";

 
	   $result = mysqli_query($conn,$sql);
	 //  var_dump($result);
	   if($result){
	   	header('login.php');
	   }


   //echo  $sql;


}else{

	die('非法操作');
}


// var_dump($_POST);
// // 



//


 ?>						