<?php

spl_autoload_register(function($class) {
  
    $paths = ['models', 'controllers', 'libraries'];
    
    foreach ($paths as $path) {
      if (file_exists($path . DIRECTORY_SEPARATOR . $class . ".php")) {
        require_once($path . DIRECTORY_SEPARATOR . $class . ".php");
      }
    }
  });

    