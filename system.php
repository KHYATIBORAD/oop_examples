<?php

class Sysinfo {

    private function get_date() {
        return date("Y/m/d");
    }

    private function get_version() {
        return phpversion();
    }

    public function getInfo() {

        $date = $this->get_date();
        $version = $this->get_version();

        echo "The date is: $date\n";
        echo "The PHP version is: $version\n";
    }
}

$sys = new SysInfo();
$sys->getInfo();
#sys->get_date();

?>