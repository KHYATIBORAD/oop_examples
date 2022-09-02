<?php

class Cat {
	
	private $name = "unspecified";
	private $age = "unspecified";

	public static function withName($name) {

		$cat = new Cat();
		$cat->name = $name;

		return $cat;
	}

	public static function withAge($age) {

		$cat = new cat();
		$cat->age = $age;

		return $cat;
	}

	public static function fullcat($name,$age) {

		$cat = new Cat();
		$cat->name = $name;
		$cat->age = $age;

		return $cat;
	}

	public function __tostring() {
		return "Name: $this->name, Age: $this->age\n";
	}
}

$cici = Cat::withName("Cici");
echo $cici;

$missy = Cat::withAge(6);
echo $missy;

$lucky = Cat::fullcat("Lucky", 4);
echo $lucky;

?>