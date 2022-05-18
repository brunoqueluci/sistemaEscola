
<?php
include_once("../view/cabeçalho.php");
include_once("../model/professor/inserir_professor.php");

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
            'matricula' => $this->matriculaProfessor(),
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
        
        if(empty($_POST['nome'] || $_POST['disciplina'] || $_POST['formacao'])):
            require_once("../view/alerta_campos_null.php");
        else:
            $conecta = new Inserirprofessor;
            $conecta->insert($dados);
            echo "Professor cadastrado foi: " . $dados['nome'], " e sua matricula " . $dados['matricula'], " sua disciplina é:  " . $dados['disciplina'];
            require_once("../view/alerta_cad_sucesso.php");
        endif;
        echo '</br>';
        echo '<a href="http://localhost/sistemaEscola/cadastroprofessor.php"><button class="btn btn-success">Voltar</button></a>';
    }

    public function matriculaProfessor()
    {
        $matricula = date('Y').rand(10,99);
        return $matricula;   
    }
}
