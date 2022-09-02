<?php

class person {

    public $name = "";
    private $age;
}

$p  = new person();
$p->name = "jane";
#$p->age = 17;

echo $p->name . "\n";

?>