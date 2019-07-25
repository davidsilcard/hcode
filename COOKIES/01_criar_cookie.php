<?php

    $data = array(
        "nome"=>"David"
    );
    setcookie("NOME_DO_COOKIE", json_encode($data), time()+ 3600);

    echo "Cookie criado!.";
