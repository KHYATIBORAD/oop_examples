<?php 

class Base {
	function __construct() {
		echo "construction of base class \n";
	}
}

class Derived extends Base {
	function __consruct() {
		parent::__construct();
		echo "Construction of derived class \n";
	}
}

$obj1 = new Base();
$obj2 = new Derived();

?>