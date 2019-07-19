<?php

    interface Veiculo
    {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);
    }

    class Civic implements Veiculo
    {
        public function acelerar($velocidade)
        {
            echo "O veiculo acelerou até: $velocidade Km/h <br>";
        }

        public function frenar($velocidade){
            echo "O veiculo frenou até: $velocidade Km/h <br>";
        }

        public function trocarMarcha($marcha){
            echo "O veiculo engatou a marcha: $marcha <br>";
        }
    }

    $carro = new Civic();
    $carro->acelerar(100);
    $carro->frenar(20);
    $carro->trocarMarcha(3);