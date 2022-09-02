<?php

class Base {
	
	final function say() {
		echo "Base class";
	}
}

class Derived extends Base {
	
	function say() {
		echo "Derivrd class";
	}
}

?>