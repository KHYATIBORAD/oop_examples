<?php

define("LIMIT", 333);

class BigValueException extends Exception {
	
	public function __construct($message) {
		parent::__construct($message);
	}
}

$a = 34325;

try {
	if ($a > LIMIT) {
		throw new BigValueException("Exceeded the maximum value allowed\n");
	}
} catch (BigValueException $e)
	{ echo $e->getMessage();
}

?>