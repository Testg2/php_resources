<?php

    /*
     *  = - Assignment Operator used to assign values
     *  .= - joining operator
     *  += - Add Assignment Operator - .=
     *  -= - Subtract Assignment Operator
     *  *= - Multiple Assignment Operator
     *  /= - Divide Assignment Operator
     *  %= - Modulus Assignment Operator
     *
     */

    //Assign value 10 to variable $marks
    $marks = 10;

    //Assign any name string to variable $name
    $name = "John, Smith";

    // Use += operator
    $counter = 1;
    $counter = $counter + 1;
    $counter += 1;
    echo $counter . PHP_EOL;

    $name1 = "John";
    $name1 .= ", ";
    $name1 .= "Smith";
    echo $name1  . PHP_EOL;


    $name = "kishan";
    echo $name. PHP_EOL;


    $name .= "panchal";
    echo $name. PHP_EOL;
    
    $name .= "kishan";

    echo $name. PHP_EOL;