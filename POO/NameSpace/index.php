<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("David");
    $cad->setEmail("davidsilcard@portaldedocumentos.com.br");
    $cad->setSenha("123456");
    echo $cad->registrarVenda();