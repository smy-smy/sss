<?php 
//丑数
function choushu($name){
	if (!$nums) {
		echo "没有数据";
	}
while($nums%2==0){
	$nums=$nums/2;
	echo "2";
}
while($nums%3==0){
	$nums=$nums/3;
	echo "3";
}
while($nums%5==0){
	$nums=$nums/5;
	echo "5";
}
	if($nums==1)
	{
		echo "<br>";
		echo "是丑数";
	}else{
		echo "不是丑数";
	}

 }
 choushu(nums:100);
