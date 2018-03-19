<?php
function generateMap($x, $y, $s = 0) {
	$str = '';
	$w = 0;
	$z = 0;
	$arr = array('0', '2');
	$arr1 = array('1', '1');
	if (is_integer($x) && is_integer($y) && is_integer($s)) {
		for ($j=0; $j < $y; $j++) { 
			for ($i=0; $i <= $x; $i++) {
				/*while ($w <= $x) {
					str_replace($arr, $arr1, $str);
					$w++;
				}*/
				if ($i == $x) {
					$str .= '2';
				}
				elseif ($i == 0) {
					$str .= '2';
				}
				$t = rand(0, 2);
				$str .= strval($t);
			}
			$str .= "\n";

		}
	/*while ($z < $x) {
		str_replace($arr, $arr1, $str);
		$z++;
	}*/
		return $str;
	}
	else {
		return NULL;
	}
}
function laby($str) {
	if (is_string($str)) {
		$str = str_replace("2", "|", $str);
		$str = str_replace("1", "-", $str);
		$str = str_replace("0", " ", $str);
		echo $str."\n";
		return TRUE;
	}
	else {
		return FALSE;
	}

}