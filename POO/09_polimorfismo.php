<?php

    abstract class Animal
    {
        public function falar()
        {
            return "som";
        }

        public function mover(){
            return "anda";
        }
    }

    class Cachorro extends Animal{

        public function falar(){
            return "Late";
        }
    }

    class Gato extends Animal{

        public function falar(){
            return "Mia";
        }
    }  
    
    class Passaro extends Animal{

        public function falar(){
            return "Pia";
        }

        public function mover(){
            return "Voa e ". parent::mover();
        }        
    }        

    $pluto = new Cachorro();
    echo $pluto->falar();
    echo "<br>";
    echo $pluto->mover();
    echo "<br>";
    $Gatinha = new Gato();
    echo $Gatinha->falar();
    echo "<br>";  
    $loro = new Passaro();
    echo $loro->falar();  
    echo "<br>";  
    echo $loro->mover();  
    echo "<br>";  