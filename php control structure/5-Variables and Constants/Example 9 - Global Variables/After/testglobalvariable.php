<?php

global $test2;
$test2 = "local\n";


function test2() {
    
    global $test2;
    $test2 = "function local";
    echo $test2;
}

echo $test2;

test2();

function hello(){
    global $test2;
    echo "war". $test2;

}

hello();
