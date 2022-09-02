<?php

set_error_handler("error_handler");

function error_handler($errno, $errstring, $errfile, $line, $trace) {
	throw new ErrorException($errstring, $errno, 0, $errfile, $line);
}
try {
	
	$a = 0;
	$b = 32;
	$c = $b / $a;
} catch(ErrorException $e) {
	
	echo "Error occurred\n";
	echo "$e->getMessage(), \n";
}

?>