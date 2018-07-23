<?php 
session_start();

$conn  =mysqli_connect('localhost','root','root');
 $re = mysqli_select_db($conn,'bl');
 if(!$re){
   	die('数据库选择失败');
 }

 //var_dump($_POST);

//获取用户名 密码
 $user = trim($_POST['username']);

 $password  = md5($_POST['password']);

 //查询 用户是否存在 用户输入的密码 与数据库密码进行比对ssSASsSSs

$sql  =  'select * from user where username = " ' .$user.'"  and  password =  "'.$password.'"' ;

$result = mysqli_query($conn,$sql);

var_dump($_POST);
 $res = mysqli_fetch_assoc($result);

 var_dump($res);



//echo "$sql";	

 //如果通过就算验证通过

 ?> 

 <!DOCTYPE html>
 <html>
 <head>
 	<title>登陆界面</title>
 </head>
 <body>

  <form action="login.php" method="post">
 <table width="800" border="1">
 	<tr>
 	    <td colspan="2">登录</td>	
 	</tr>

 	<tr>
 	 <td>用户名</td>
 	<td><input  type="text" name="username"></td>
 		
 	</tr>
 	<tr>
 		<td>密码 </td>
 		

 		<td><input type="text" name="password"></td>
 	</tr>
 		
 		<tr>
 			<td>登陆</td>

 			<td><input type="submit" name=""  value="登陆"></td>
	
 		</tr>
 		
 	
 </table>
 </form>
 	
 </body>
 </html>