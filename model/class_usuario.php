<?php

    class Usuario{
        private $codUsuario;
        private $usuario;
        private $senha;

        public function __construct($codUsuario = 0, $usuario = "", $senha = ""){
            $this->codUsuario = $codUsuario;
            $this->usuario = $usuario;
            $this->senha = $senha;
        }

        // Geteres & Seteres

        public function getCodUsuario(){
            return $this->codUsuario;
        }

        public function setCodUsuario($codUsuario){
            $this->codUsuario = $codUsuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

    }