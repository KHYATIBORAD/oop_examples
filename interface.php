<?php

interface Device {
	
	public function switch_on();
	public function switch_off();
}

interface volume {
	
	public function volume_up();
	public function volume_down();
}

interface pluggable {
	
	public function plug_in();
	public function plug_off();
}

class Cellphone implements device, volume, pluggable {
	
	public function switch_on() { echo "Switching on\n"; }
	public function switch_off() { echo "Switching off\n"; }

	public function volume_up() { echo "Volume up\n"; }
	public function volume_down() { echo "Volume down\n"; }

	public function plug_in() { echo "plug in\n"; }
	public function plug_off() { echo "plug off\n"; }
}

$o = new Cellphone();
$o->switch_on();
$o->volume_up();
$o->plug_in();

?>