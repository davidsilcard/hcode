<?php

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    $stmt = $conn->prepare("delete from tb_usuarios where idusuario = :ID");
    $id = 1;
    $stmt->bindParam(":ID", $id);
    $stmt->execute();
    echo "Deletado com sucesso !!!";
