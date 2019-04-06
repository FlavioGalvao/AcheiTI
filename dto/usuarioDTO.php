<?php

    class UsuarioDTO {
        private $idusuario;
        private $usuario;
        private $senha;
        private $perfil;
        
        //Getters e Setters
        public function getIdusuario(){
            return $this->idusuario;
        }
        
        public function getUsuario(){
            return $this->usuario;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        
        public function getPerfil(){
            return $this->perfil;
        }
        
        public function setIdusuario($idusuario){
            $this->idusuario = $idusuario;
        }
        
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        
        public function setSenha($senha){
            $this->senha = $senha;
        }
        
        public function setPerfil($perfil){
            $this->perfil = $perfil;
        }
    }

?>