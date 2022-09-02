<?php

class Cat {}
class Dog {}
class Bird {}

$objects = [ new Cat(), new Dog(), new Cat(), new Bird(), new Bird(), new Dog(), new Dog(), new Cat(),new Bird() ];

shuffle($objects);

foreach ($objects as $object) {
	if ($object instanceof Cat) {
		echo "It is a cat\n ";
	} elseif ($object instanceof Dog)
		{ echo "It is a Dog\n";
	} elseif ($object instanceof Bird)
		{ echo "It is a Bird\n";
	}
}

?>