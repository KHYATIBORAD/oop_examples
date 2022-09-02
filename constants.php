<?php

class Math {
	
	const PI = 3.14159265359;

	public function getPI() {
		echo self::PI;
	}
}

$math = new math();

echo Math::PI, "\n";
echo $math->getPI(), "\n";

?>