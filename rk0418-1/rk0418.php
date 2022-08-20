<?php 
//丑数
function choushu($num){
	while ($num%2==0) {
		# code...
		$num=$num/2;
		echo "2";
	}
	while ($num%3==0) {
		# code...
		$num=$num/3;
		echo "3";
	}
	while ($num%5==0) {
		# code...
		$num=$num/5;
		echo "5";
	}
	if ($num==1) {
		# code...
		echo "</br>";
		echo "是丑数";
	}else{
		echo "不是丑数";
	}
}
choushu(100);
20220820

 ?>
