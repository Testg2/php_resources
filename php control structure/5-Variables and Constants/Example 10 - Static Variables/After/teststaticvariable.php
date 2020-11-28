<?php

global $val;

static $val = 1;

echo $val;

function val() {
    global $val;
    echo $val;
    $val = $val + 1;
}

"\n" . val();
val();
val();
val();
val();



// another example //static keyword store current value 
// we just have to use static before the variable we can also  perform the operations

function test() {
    static $val2 = 1;
    echo $val2;

    $val2 = $val2 + 1;

}

test();
test();
test();
test();
test();