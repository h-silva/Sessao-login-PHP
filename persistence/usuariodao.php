<?php
    require_once "conexao.php";
    require_once "../model/class_usuario.php";

    class usuarioDAO{
        private $conexao;

        public function __construct(){
            $this->conexao = new Conexao();
            if($this->conexao->conectar() == false){
                echo "Não conectou!" . mysql_error();	
            }
        }
        public function verificarUsuario($usuarioParam){
            $usuario = $usuarioParam->getUsuario();
            $senha = $usuarioParam->getSenha();

            $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND
            senha = '$senha'";

            $result = $this->conexao->executarQuery($sql);
            
            if($result->num_rows>0){                
                return true;
            }
            else{
                return false;
            }
            return 0;
        }
    }
?>