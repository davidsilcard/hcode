<?php

    class Usuario
    {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        /**
         * Get the value of idusuario
         */
        public function getIdusuario()
        {
            return $this->idusuario;
        }

        /**
         * Set the value of idusuario
         *
         * @return  self
         */
        public function setIdusuario($idusuario)
        {
            $this->idusuario = $idusuario;

            return $this;
        }

        /**
         * Get the value of deslogin
         */
        public function getDeslogin()
        {
            return $this->deslogin;
        }

        /**
         * Set the value of deslogin
         *
         * @return  self
         */
        public function setDeslogin($deslogin)
        {
            $this->deslogin = $deslogin;

            return $this;
        }

        /**
         * Get the value of dessenha
         */
        public function getDessenha()
        {
            return $this->dessenha;
        }

        /**
         * Set the value of dessenha
         *
         * @return  self
         */
        public function setDessenha($dessenha)
        {
            $this->dessenha = $dessenha;

            return $this;
        }

        /**
         * Get the value of dtcadastro
         */
        public function getDtcadastro()
        {
            return $this->dtcadastro;
        }

        /**
         * Set the value of dtcadastro
         *
         * @return  self
         */
        public function setDtcadastro($dtcadastro)
        {
            $this->dtcadastro = $dtcadastro;

            return $this;
        }

        public function loadById($id)
        {
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
                ":ID"=>$id
            ));

            if (count($results)>0) {
                $this->setData($results[0]);
            }
        }

        public function __toString()
        {
            $data = $this->getDtcadastro();
            if (isset($data)===true) {
                $data = $this->getDtcadastro()->format("d/m/Y H:i:s");
            };

            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "deslogin"=>$this->getDeslogin(),
                "dessenha"=>$this->getDessenha(),
                "dtcadastro"=>$data
            ));
        }

        public static function getList()
        {
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios");
        }

        public static function searchLogin($login)
        {
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios where deslogin like :SEARCH order by deslogin", array(
                ":SEARCH"=>"%$login%"
            ));
        }

        public function login($login, $password)
        {
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN and dessenha = :PASSWORD", array(
                ":LOGIN"=>$login,
                ":PASSWORD"=>$password
            ));

            if (count($results)>0) {
                $this->setData($results[0]);
            } else {
                throw new Exception("Login e/ou Senha incorretos.", 1);
            }
        }

        public function setData($data)
        {
            $this->setIdusuario($data['idusuario']);
            $this->setDeslogin($data['deslogin']);
            $this->setDessenha($data['dessenha']);
            $this->setDtcadastro(new DateTime($data['dtcadastro']));
        }

        public function __construct($login = "", $password = ""){
            $this->setDeslogin($login);
            $this->setDessenha($password);
        }

        public function insert()
        {
            $sql = new Sql();
            $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
                ":LOGIN"=>$this->getDeslogin(),
                ":PASSWORD"=>$this->getDessenha()
            ));

            if (count($results)>0) {
                $this->setData($results[0]);
            }
        }

        public function update($login, $password){
            $this->setDeslogin($login);
            $this->setDessenha($password);
            $sql = new Sql();
            $results = $sql->query("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID", array(
                ":LOGIN"=>$this->getDeslogin(),
                ":PASSWORD"=>$this->getDessenha(),
                ":ID"=>$this->getIdusuario()
            ));

        }

        public function delete(){
            $sql = new Sql();
            $results = $sql->query("delete from tb_usuarios where idusuario = :ID", array(
                ":ID"=>$this->getIdusuario()
            ));  

            $this->setIdusuario(0);
            $this->setDeslogin("");
            $this->setDessenha("");
            $this->setDtcadastro(new DateTime());            
        }
    }
