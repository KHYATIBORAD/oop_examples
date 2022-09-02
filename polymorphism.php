<?php

abstract class Shape {
	
	private $x = 0;
	private $y = 0;

	public abstract function area();
}

class Rectangle extends Shape {
	
	function __construct($x, $y) {

		$this->x = $x;
		$this->y = $y;
	}

	function area() {

		return $this->x * $this->y;
	}
}

class Square extends Shape {
	
	function __construct($x) {

		$this->x = $x;
	}

	function area() {

		return $this->x * $this->x;
	}
}

$Shapes = [ new Square(5), new Rectangle(12, 4), new Square(8)];

foreach ($Shapes as $Shape) {
	
	echo $Shape->area() . "\n";
}

?>