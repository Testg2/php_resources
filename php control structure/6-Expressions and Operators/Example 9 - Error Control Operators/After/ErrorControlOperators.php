<?php

    echo $php_errormsg . "no error". PHP_EOL;

    $value = 1 / 0; //This line is a error and will not proceed further.
    echo "error" . $php_errormsg  . PHP_EOL;
