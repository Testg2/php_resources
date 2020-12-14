<?php

    //backtick `` - left side to number 1 on keyboard.

    //Windows
    echo `dir *.php`;

    //Linux or Mac
    echo `ls *.php`;

    // run linux commands in php using backtick command
    echo  "todays date:- ";
    echo `date +%Y%m%d_%H%M%S`;

    // echo `mkdir kishan` . `date`;
    // echo `mkdir kishan` . `time`;