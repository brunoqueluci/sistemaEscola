<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Portal Escolar</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
include_once("../model/conexao.php");
include_once("../model/cadastrar.php");

function dados_aluno()
{
    $dados_aluno = array 
    (
        'nome' => $_POST['nome'],
        'matricula' => $_POST['matricula'],
        'data_nasc' => $_POST['data_nasc'],
        'idade' => calcula_idade( $_POST['data_nasc'])
    );

    return $dados_aluno;
};

function cadastrar(){
    $dados = dados_aluno();
    $id = insert($dados);

    echo '</br>';
    echo '<a href="http://localhost/sistemaEscola/index.php" ><button class="btn btn-success">Voltar</button></a>';

}

cadastrar();

function calcula_idade($data){

    $data_atual = date("Y-m-d");
    $lista = explode('-', $data_atual);
    
    $ano_atual = $lista[0];
    $mes_atual = $lista[1];

    $lista_dt_nasc = explode('-', $data);
    
    $ano_nasc = $lista_dt_nasc[0];
    $mes_nasc = $lista_dt_nasc[1];

    $idade = $ano_atual - $ano_nasc;
    
    return $idade;
}

