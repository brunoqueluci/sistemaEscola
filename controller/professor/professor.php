
<?php
include_once("../view/cabeçalho.php");
include_once("../model/professor/controller_professor.php");

/**
 * Método para coleta de dados para array
 */
class Professor
{
    public function dados_professor()
    {
        $dados_professor = array 
        (
            'nome' => $_POST['nome'],
            'matricula' => $_POST['matricula'],
            'disciplina' => $_POST['disciplina'],
            'formacao' => $_POST['formacao']
        );
        return $dados_professor;
    }

    /**
     * Método para cadastro de professor
     */
    public function cadastrar()
    {
        $dados = $this->dados_professor();
        $conecta = new Inserirprofessor;
        $conecta->insert($dados);
        if(empty($dados)):
            // $id = insert($dados);
            require_once("../view/alerta_campos_null.php");
         else:
             echo "Deu certo2";
         endif;
        echo '</br>';
        echo '<a href="http://localhost/sistemaEscola/cadastroprofessor.php"><button class="btn btn-success">Voltar</button></a>';
    }
}