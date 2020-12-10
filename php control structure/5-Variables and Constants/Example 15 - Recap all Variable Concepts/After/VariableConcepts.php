<?php

    //Define a Variable
    $name = "John, Smith";

    //Variable can be used as string or integer
    $message = 1;
    $message = "PHP is the best!";
    echo $message .  "<br>";

    //Print variable with double quotes
    echo "name variable = $name" .  "<br>";
    echo 'name variable = $name' .  "<br>";

    //Variable Typing convert between string to integer or any data types.
    $length = "10";
    $breath = 20;
    $area = $length * $breath; //Variable Typing Example
    echo "Area: $area" . "<br>";

    //Variables are case sensitive
    $Name = "Walter White";
    echo "$name is not equal to $Name" . "<br>";

    //Variable Scope
    $counter = 1;
    function show_counter() {
        $counter = 2;
        echo $counter . "<br>";
    }
    show_counter();
    echo $counter . "<br>";

    //Global Variables
    global $count;
    $count = 1;
    function show_global_counter() {
        $count = 2;
        echo $count;
        // echo $count . "<br>";
    }
    echo $count;
    show_global_counter();

    //Static Variable
    function counter_static()
    {
        static $count = 1;
        echo $count . "<br>";
        $count = $count + 1;
    }
    counter_static();

    //Predefined Variables
    $test = 5;
    function print_global_variable() {
        echo $GLOBALS['test'];
    }
    print_global_variable();

    //Variable of Variables

    $t = "kishan";
    $bro = $t;
    $test2 = 500;
    $countofcount = "bro";
    echo $$countofcount;
    echo $$$countofcount;
    

    //isset()
    $$countofcount = 1;
    echo isset ($$countofcount) ? "Variable is set": "Variable is not set";
    echo isset($countofcount) ? "set " : " not set";