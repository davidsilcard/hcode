<?php

    class Endereco
    {
        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($logradouro, $numero, $cidade)
        {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        }
    }

    $meuEndereco = new Endereco("Rua jequié","217","Osasco");
    var_dump($meuEndereco);
?>    