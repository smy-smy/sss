<?php 
global $str;

$str = "";


echo calFn(1,13);

function calFan($n,$m){
	flonal $str;
	for ($i=$n; $i < $m; $i++) { 
		# code...
		$str .=$i;
	}
	$count = substr_count($str,1);
	return $count;
}


 ?>