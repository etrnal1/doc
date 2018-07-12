<?php 

echo 13;

include 'common.php';

  $data['username'] = trim($_POST['username']);

 $data['password']  = md5(trim($_POST['pwd']));

$data['retime'] =  time();

//
$e= insert($conn,'user',$data);

var_dump($e);

echo "13";

if($e){
	$tips='用户注册成功';
	include  'tpl/success.php';

}else{
	$tips='用户注册失败';
	include 'tpl/error.php';
}


//选择数据库
 $result = mysqli_select_db($conn,'bs');
 //var_dump($data);
 $key = implode(',',array_values($data));
 var_dump($key);
//写sql 语句
  $sql  =  "insert into
   user (username,password,retime) values('$username','$password','$retime')";

  var_dump($sql);
//执行sql 语句
 $query = mysqli_query($conn,$sql);
 if($result && mysqli_affected_rows($conn)){
 	$tips = '用户注册成功';
 	include 'tpl/success.php';

 	
 }else{

 	$tips = '用户注册失败';
 	include 'tpl/error.php';
 }
 var_dump($query);

 mysqli_close($conn);
//关闭数据库
//var_dump($conn);
 //echo "string";
 ?>