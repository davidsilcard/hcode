<?php

    spl_autoload_register(function($nameClass){
        $dirClass = "Class";
        $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

        if(file_exists($fileName)){
            require_once($fileName);
        }
    });