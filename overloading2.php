<?php

class Sum {

    public function getSum() {

        $args = func_get_args();

        //if (empty($args)) return 0;
        $Sum = 0;

        foreach ($args as $arg) {
            $Sum += $arg;
            print_r($arg);
        }

        return $Sum;
    }
}

$s = new Sum();
echo $s->getSum() . "\n" ;
echo $s->getsum(5) . "\n" ;
echo $s->getSum(3, 4) ."\n" ;
echo $s->getSum(3, 4, 7) . "\n" ;

?>