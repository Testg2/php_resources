<?php

// local variable
$a = "test message\n";


function test(){
    $a = "test message 2\n";
    echo "$a";
}

test();
echo $a;

function two() {
    $welcome = "hi";
    echo $welcome;
}

two();

?>s