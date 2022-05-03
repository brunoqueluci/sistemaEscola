<?php
/* 
Classe para fazer a conexão com banco de dados.
*/
class Conecta
{
    public function conectar()
    {  
        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $dbname = "escola";

        $conexao = mysqli_connect($host, $user, $pass, $dbname);
        if(mysqli_connect_error()):
            echo "Erro na conexão: ".mysqli_connect_error();
        endif;
        return $conexao;
    }
}