<?php

    class Documento
    {
        private $numero;

        public function getNumero()
        {
            return $this->numero;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }
    }

    class Cpf extends Documento
    {
        public function validar():bool
        {
            $numero = $this->getNumero();
            return true;
        }
    }

    $doc = new Cpf();
    $doc->setNumero("22233355536");
    var_dump($doc->validar());