<?php

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    $stmt = $conn->prepare("insert into tb_usuarios (deslogin,dessenha) values (:LOGIN,:PASSWORD)");

    $login = "Jose";
    $password = "123456";

    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->execute();
    echo "Inserido com sucesso !!!";

