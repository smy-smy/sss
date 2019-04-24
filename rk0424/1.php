<?php 

class aa{
	public static function sum($n){
		$sum = $n;
		$sum&&($sum+=self::sum($n-1));
		return $sum;
	}
}

$n = aa::sum(100);

var_dump($n);
 ?>