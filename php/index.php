<?php 
//连接本地的redis
$redis =  new Redis();

$redis =connect('127.0.0.1',6379);

echo  '连接成功';

echo ''.$redis->ping();

 ?>