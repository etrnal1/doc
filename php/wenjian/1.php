<?php 
//文件处理
////确定文件路径
echo  phpinfo();
die();
 $fp = fopen('abc.txt', 'r+');

 while ($r= fread($fp, 1)) {


 	echo $r;

 	echo "hello";
 	# code...
 }

 // file_put_contents(filename, data)
 // file_get_contents(filename);

 // fwrite($fp, '昨天过的好');


 // fwite= fpute;

 fclose($fp);

 // fread();

 ?>

<!-- r
w
R+
W+
a
A+ 
x 文件不存在创建 ,文件存在报错
x+ 可以读取
t   
b  二进制的模式通常
windows 提供的换行符 /n 
-->