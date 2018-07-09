<?php 
 /**
  *用户退出
  */
setcookie('username','',time()-1);
unset($_SESSION['uid']);
session_destroy();
echo  '退出成功';

 ?>