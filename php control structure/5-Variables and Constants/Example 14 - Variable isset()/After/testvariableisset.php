<?php

    // $name = "kishan.panchal";
    $name;
    // echo $name;  

    echo isset($name) ? "variable is set" : "variable is not set ";
    

    // example 

    $name2 = "kishan \n";
    $pre = $name2;
    
    echo isset($pre) ? "variable is set  " . $pre : "variable is not set";
    
    $bro = "hi\n";
    echo isset($bro) ? "yes": "no";
    
    $test = null;
    echo $test;
    
    echo isset($test) ? "good" : "bad";