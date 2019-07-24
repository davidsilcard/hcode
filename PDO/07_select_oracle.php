<?php

    // $conn = new PDO("oci:dbname=ntfservicos", "root", "");

    $conn_string = '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=192.168.15.10)(PORT=1521)))(CONNECT_DATA=(SERVICE_NAME=ntfserv)))';
    $conn = new PDO("oci:dbname=$conn_string", "ntfservicos", "ntfs3rv123");

    $stmt = $conn->prepare("select * from TEMP_CAPTURA_AJUIZAMENTO_CONF");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($results as $row) {

        foreach ($row as $key => $value) {
           
            echo "<strong>$key: </strong>$value<br>";

        }
        
        echo "------------------------------------------------<br>";

    }