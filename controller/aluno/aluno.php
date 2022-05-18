<?php
include_once("../controller/Calcula_Idade.php");
include_once("../model/aluno/Inserir_Aluno.php");

/* 
    Controller para cadastro de alunos;
*/
class Aluno
{
    public function dados_aluno()
    {
        $calIdade = new CalcularIdade;
        $dados_aluno = array
        (
            'nome' => $_POST['nome'],
            'matricula' => $this->calcula_matricula($_POST['data_nasc']),
            'nome_pai' => $_POST['nome_pai'],
            'nome_mae' => $_POST['nome_mae'],
            'data_nasc' => $_POST['data_nasc'],
            'serie_aluno' => $_POST['serie_aluno'],
            'idade' => $calIdade->calcula_idade($_POST['data_nasc'])
        );  
        return $dados_aluno;
    }
    
    public function calcula_matricula($a)
    {
        $dt_nasc = $a;
        $dt_nasc_limp = explode('-', $dt_nasc);
        $mes_nasc = $dt_nasc_limp[1];
        $dia_nasc = $dt_nasc_limp[2];
        $matricula = date('Y') . $mes_nasc . $dia_nasc . rand(10,99);
        return $matricula;
    }

    public function cadastrar()
    {
        $dados = $this->dados_aluno();
        $conecta = new InserirAluno;
        $conecta->insert($dados);
            if(empty($dados)):
               // $id = insert($dados);
               require_once("../view/alerta_campos_null.php");
            else:
                echo "Deu certo2";
            endif;
        echo '</br>';
        echo '<a href="http://localhost/sistemaEscola/cadastroaluno.php"><button class="btn btn-success">Voltar</button></a>';
    }  
}