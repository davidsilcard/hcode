<?php

    require_once("config.php");
    // $usuario = new Usuario();
    // $usuario->loadById(3);
    // echo $usuario;

    // $lista = Usuario::getList();
    // echo json_encode($lista); 

    // $search = Usuario::searchLogin("da");
    // echo json_encode($search); 

    // $usuario->login("David","852963");
    // echo $usuario;

    // $usuario = new Usuario("Gatinha", "6y7u8i");
    // $usuario->insert();
    // echo $usuario;

    $usuario = new Usuario();
    $usuario->loadById(5);
    $usuario->delete();
    echo $usuario;