<?php

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    $stmt = $conn->prepare("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID");

    $login = "Leao";
    $password = "123456";
    $id = 1;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);
    $stmt->execute();
    echo "Alterado com sucesso !!!";
