<?php

class Maths {
	private $PI = 3.142;
	
	function Maths() {
	}
	
	function Pi() {
		return $this->PI;
	}
	
	function square($num) {
		return $num * $num;
	}
	
	function cube($num) {
		return ($num * $num * $num);
	}
	
	function power ($number, $power) {
		$i = 0;
		$result = 1;
		
		while($i < $power) {
			$result *= $number;
			$i ++;
		}
		return $result;
		
	}
	
	function absolute($number) {
		if ($number < 0) {
			return -$number;
		}else {
			return $number;
		}
	}
}
?>