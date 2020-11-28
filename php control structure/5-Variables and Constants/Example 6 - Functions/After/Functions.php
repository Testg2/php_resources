<?php

    //Sample 1
    //Define a Function
    //Function Declaration
    function add() {

        //Function Body
        $firstvalue = 10;
        $secondvalue = 20;
        $total = $firstvalue * $secondvalue;

        echo "Total: $total";

    }

    //Calling a Function
    add();

    function test() {
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo "\ntest function started\n$c " . " \n";

    }

    test();

    // Sample 2
    //Should not define Duplicate function
    /*
        function add() {
            echo "Hello";
        }
    */

    //Sample 3
    //Call Function first and define it in the last. No sequence issues.
    welcome_message();
    function welcome_message() {
        echo "Welcome to PHP Functions!";
    }

