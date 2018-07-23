<?php 
session_start();

$conn  =mysqli_connect('localhost','root','root');
 $re = mysqli_select_db($conn,'bl');
 if(!$re){
   	die('数据库选择失败');
 }
 ?>				