
<?php 

class Object {
	
	public $id;
	public $size;
	public $color;

	function __construct($id, $size, $color) {

		$this->id = $id;
		$this->size = $size;
		$this->color = $color;
	}

	function __clone() {

		$red = $this->color->red;
		$green = $this->color->green;
		$blue = $this->color->blue;
		$this->color = new Color($red, $green, $blue);
	}
}

class Color {
	
	public $red;
	public $green;
	public $blue;

	function __construct($red, $green, $blue) {

		$this->red = $red;
		$this->green = $green;
		$this->blue = $blue;
	}
}

$color = new Color(23, 42, 223);

$object1 = new Object(23, "small", $color);
$object2 = clone $object1;

$object2->id++;
$object2->color->red = 255;
$object2->size = "big" ;

print_r($object1);
print_r($object2);

?>