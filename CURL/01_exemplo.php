<?php

    // https://viacep.com.br/
    $cep = "06182110";
    $link = "viacep.com.br/ws/$cep/json/ ";

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_PROXY, "192.168.151.56:3128"); 
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, "david.cardoso:Dc8124");

    $response = curl_exec($ch);

    if(curl_errno($ch)){
        echo 'Curl error: ' . curl_error($ch);
    }

    curl_close($ch);

    $data = json_decode($response, true);
    print_r($data);