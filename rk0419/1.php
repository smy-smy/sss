<?php 
var_dump(a(4,3));
function a($n,$m){
$list = range(1,$n);
$num = 1;
	while (count($list) > 1) {
		foreach ($list as $k => $v) {
			if ($num == $m) {
				unset($list[$k]);
				$num = 1;
				continue;
			}
			$num ++;
		}
	}
	return $list;
}

 ?>