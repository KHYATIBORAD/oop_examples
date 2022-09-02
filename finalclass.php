<?php

final class math {
	
	static function getPI() {
		return 3.141592;
	}
}

class Derivedmath extends math {
	
	function say() {
		echo "Detivedmath class";
	}
}

?>