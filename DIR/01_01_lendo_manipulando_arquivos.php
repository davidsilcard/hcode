<?php


    $name = "images";

    if(!is_dir($name)){
        mkdir($name);
        echo "Diretorio $name criado com sucesso.";
    }else{
        rmdir($name);
        echo "Já exite o diretorio $name, foi removido.";
    }