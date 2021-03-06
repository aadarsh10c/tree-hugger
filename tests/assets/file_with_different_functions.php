<?php

 /**
  * PHPDoc
  *
  * @param int    $arg1 First Argument
  * @param string $arg2 Second Argument
  * @param int    $argn Last Argument
  */
function foo($arg_1, $arg_2, $arg_n) {
    echo "Example\n";
    return $retval;
}

function test() {
    return 2*x + 1;
}

/*
 * Car documentation
 */
class Car {
    function Car() {
        $this->model = "Tesla";
    }
    // Method doc comment
    public function bar() {
        return 'method';
    }
}

function simple_params(string $a, Car $b, $c = 0, string $d = "arg") {
    echo "Example\n";
    return $retval;
}

function variadic_param(int ... $array) {
    echo "Example\n";
    return $retval;
}


class Truck {

    // Method doc comment
    function drive() {

    }

}

// create an object
$Lightning = new Car();

// show object properties
echo $Lightning->model;

?>
