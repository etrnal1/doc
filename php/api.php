<?php 
//天气查询api 练习

/**
 * 查询天气的函数
 */
function getWeather()
{
  
  $city= $_GET['city'];
  $city="天津";

 $url="http://wthrcdn.etouch.cn/weather_mini?city=".$city; 
$str = file_get_contents($url);
// $str = file_get_contents($url)；
$result = gzdecode($str);
  echo  $result;


  

}

getWeather();

 // function tian(){
 //    $city=$_GET['city']; //接收城市名
 //    $city="天津";
 
 //    $url="http://wthrcdn.etouch.cn/weather_mini?city=".$city; 
 //    $str = file_get_contents($url);  //调用接口获得天气数据
 //    //这一步很重要
 //    $result= gzdecode($str);   //解压
 //    //end
 //    echo  $result;
 
 //   }
   // tian();



 ?>