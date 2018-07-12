<!DOCTYPE html>
<html>
<head>
	<title>错误</title>

	<style type="text/css">
		
		.error{

			width: 300px;
			height: 100px;
			background: pink ;
			color: #ffff;
			border:1px solid #ccc;

			position: absolute;
			top: 40%;
			left: 40%;
			font-size: 18px;
			line-height: 100px;
			text-align: center;
		}
	</style>
</head>
<body>

 <div class="error">
 		<?=$tips; ?>

 		<a href="index.php?sid=<?=$_GET['sid'];?>"></a>
 </div>

</body>
</html>