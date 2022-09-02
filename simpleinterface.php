<?php 

intrface IInfo {
	
	public function do_inform();
}

class some implements IInfo {
	
	public function do_inform() {
		echo "This is a some class\n";
	}
}

$sm = new Some();
$sm->do_inform();

?>