<?php

require_once 'Maths.php';

class MathsTest {
	var $maths;

	function MathsTest() {
		
	}

	function doTest() {
		$this->setUp();
		$this->testPi();
		$this->testSquare();
		$this->testCube();
		$this->testPower();
		$this->testAbsolute();
		$this->tearDown();
	}
	
	function setUp() {
		$this->maths = new Maths();
	}
	
	function tearDown() {
		unset($this->maths);
	}
	
	function testPi() {
		echo "1. Running the Pi Function Test <br>";
		$result = $this->maths->Pi();
		if ($result == 3.142) {
			echo "The PI Function Test Has Passed<br>";
		}else {
			echo "The PI Function Test Has Failed<br>";
		}
	}
	
	function testSquare() {
		echo "<br>2. Running the Square Function Test <br>";
		$result = $this->maths->square(10);
		if ($result == 100) {
			echo "The Square Function Test Has Passed<br>";
		}else {
			echo "The Square Function Test Has Failed<br>";
		}
	}
	
	function testCube() {
		echo "<br>3. Running the Cube Function Test <br>";
		$result = $this->maths->cube(10);
		if ($result == 1000) {
			echo "The Cube Function Test Has Passed<br>";
		}else {
			echo "The Cube Function Test Has Failed<br>";
		}
	}
	
	function testPower() {
		echo "<br>4. Running the Power Function Test <br>";
		$result = $this->maths->power(10, 5);
		if ($result == 100000) {
			echo "The Power Function Test Has Passed<br>";
		}else {
			echo "The Power Function Test Has Failed<br>";
		}
	}
	
	function testAbsolute() {
		echo "<br>5. Running the Absolute Function Test <br>";
		$result = $this->maths->absolute(-10);
		$result2 = $this->maths->absolute(10);
		if ($result == 10 && $result2 == 10) {
			echo "The Absolute Function Test Has Passed<br>";
		}else {
			echo "The Absolute Function Test Has Failed<br>";
		}
	}
}




?>