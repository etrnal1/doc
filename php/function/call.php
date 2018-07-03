<?php 

/**
 * 传入第一个数$num1
   回调函数是变量函数的再变形
   本质上是变量函数的在变形
 */




//匿名函数

$hello = function($phone){
   echo  $phone;
};
$hello('苹果');


//时间函数 
date_default_timezone_set('Asia/shanghai');
 echo date('y-m-d H:i:s',time());


 //请写出昨天此时此刻的时间
 time()-24*60*60;
 date('',strtotime('1-day'));


 //check date  检查时间格式是否正确

 //日 月 年





