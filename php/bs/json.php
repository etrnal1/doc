<?php 
$arr = ['a'=>1,'b'=>2,'c'=>3];
var_dump($arr);
echo json_encode($arr);
setcookie("user","root",time()+3600);
var_dump($_COOKIE['user']);
 ?>