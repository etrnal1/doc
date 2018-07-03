 
echo "多写代码";


<?php if(empty($_SESSION['uid'])):?>



<?php else: ?>


<?php endif; ?>


<?php  echo time(); ?>


<?php 
//定义当前路径
  define('WEB_SITE',str_replace('\\', '/', __DIR__.'/'));


echo WEB_SITE;

 ?>