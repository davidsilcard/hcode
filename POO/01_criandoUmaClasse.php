<?php

    class Pessoa {


        public $nome; //atributo

        public function falar(){ //método

            return "Meu nome é ".$this -> nome;
            
        }



    }

    $p = new Pessoa();

    $p->nome = "David Cardoso";
    echo $p->falar();

?>