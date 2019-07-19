<?php

 class Pessoa
 {
     public $nome = "David Cardoso";
     protected $idade = "39";
     private $senha = "123456";

     public function verDados()
     {
         echo $this->nome.PHP_EOL;
         echo $this->idade.PHP_EOL;
         echo $this->senha.PHP_EOL;
     }
 }


 $objeto = new Pessoa();
 echo $objeto->verDados();

