<?php
include_once("../view/cabeçalho.php");
include_once("../model/disciplina/inserir_disicplina.php");

/**
 * Método para coleta de dados para array
 */
class Disciplina
{
    public function dados_disciplina()
    {
        $dados_disciplina = array 
        (
            'nome' => $_POST['nome']
        );
        return $dados_disciplina;
    }

    /**
     * Método para cadastro de professor
     */
    public function cadastrar()
    {
        $dados = $this->dados_disciplina();
        
        if(empty($_POST['nome'])):
            require_once("../view/alerta_campos_null.php");
        else:
            $conecta = new InserirDisciplina;
            $conecta->insert($dados);
            echo "Disciplina cadastrada foi: " . $dados['nome'];
            require_once("../view/alerta_cad_sucesso.php");
        endif;
        echo '</br>';
        echo '<a href="http://localhost/sistemaEscola/cadastrodisciplina.php"><button class="btn btn-success">Voltar</button></a>';
    }
}
