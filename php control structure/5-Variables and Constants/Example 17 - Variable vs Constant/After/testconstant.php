<?php

    // $name = "kishan.panchal";
    define('fullname', 'kishan.panchal');

    // assign constant to variable
    $fullname = fullname;

    echo $fullname;

    // cannot assign or change constamt values
    define("fullname", 'kishan.panchall');

    $fullname = fullname;
    
    echo $fullname;
    define("fullnames", 'mama');
    $afx = fullnames;
    // echo $afx;





    function my() {
        echo fullnames;
        // echo $afx;
        
        // constant ne access karva mate menthod vaparvu 
        echo constant('fullnames');

    }

    my();