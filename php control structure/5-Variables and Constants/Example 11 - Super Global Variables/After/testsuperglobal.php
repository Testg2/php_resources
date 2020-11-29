<?php

    // how to use and accessing super global variables
    global $message;
    $message = "welcoome";
    echo $GLOBALS['message'];


    // super global variables are predefined you just have to use directly
    // we can pass argumentt to this globel variables it will return and give full path of the file

    echo "filename:" . $_SERVER['PHP_SELF'];

    global $name;
    $name = "kishan.panchal";

    function full_name() {
        // global $name;

        echo $GLOBALS['name'];
        // echo $name;
    }

    full_name();

?>