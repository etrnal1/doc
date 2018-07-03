<?php 

function table(
	$rows=10,
	$cols=10,
	$oneColor="pink",
	$twoColor="yellwo")
{

	echo '<table width="800" border="1">';
	for($i=1;$i<=$rows;$i++){
		if($i%2){
			echo '<tr bgcolor="'.$oneColor.'">';
		}else{

			echo '<tr bgcolor="'.$twoColor.'">';

		}

		echo '<tr>';

		for($j=1;$j<=$cols;$j++){

			echo '<td>' .(($i-1)*$cols+$j).'</td>';
		}
		echo '</tr>';
	}

		echo  '</table>';


}

table();


 ?>