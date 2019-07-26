<?php

    function trataNome($name)
    {
        if (!$name) {
            throw new Exception("Nenhum nome informado!.", 8989);
        }

        echo ucfirst($name)."<br>";
    }

    try {
        trataNome("joão");
        trataNome("");
    } catch (Exception $e) {
        echo $e->getMessage()."<br>";
    } finally {
        echo "ok";
    }
