<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Cadastro Disciplina | Portal Escolar</title>
=======
    <title>Cadastro Aluno | Portal Escolar</title>
>>>>>>> e8ed6d3b23bce6a43ae5763f414b1433016c8748
</head>
<body>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
            <a class="navbar-brand" href="#">Portal Escola</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </nav>
    </div>
<<<<<<< HEAD
    <form action="../sistemaEscola/controller/aluno.php" method="POST">
=======
    <form action="../sistemaEscola/controller/controller_disciplina.php" method="POST">
>>>>>>> e8ed6d3b23bce6a43ae5763f414b1433016c8748
        <div class="conteiner">
            <div class="d-flex justify-content-center my-auto px-md-5">
                <div class="col-3 d-flex px-md-5 py-md-2 align-items-center">
                    <div class="row">
                        <div>
                            <h1>Cadastro Disciplina</h1>
                        </div>
<<<<<<< HEAD
                            <div>
                                <div class="mb-3">
                                    <label for="nomeAluno" class="form-label">Nome da Disciplina</label>
                                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite nome da Disciplina" aria-label="Campo para cadastro de disciplina">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="Digite a matr??cula do Aluno." class="form-label">Nome Pai</label>
                                    <input class="form-control" type="text" id="nome_pai" name="nome_pai" placeholder="Digite Nome Pai" aria-label="Campo para Nome do Pai">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="Digite a matr??cula do Aluno." class="form-label">Nome M??e</label>
                                    <input class="form-control" type="text" id="nome_mae" name="nome_mae" placeholder="Digite Nome M??e" aria-label="Campo para Nome do M??e">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="Digite a data de Nascimento do aleno" class="form-label">Data de Nascimento</label>
                                    <input class="form-control" type="date" id="data_nasc" name="data_nasc" placeholder="Data de Nascimento" aria-label="Campo para Matricula do Aluno">
                                    
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="S??rie do Aluno">Selecione a S??rie</label>
                                    <select class="form-control" id="serie_aluno" name="serie_aluno">
                                        <option value="1">5?? Ano Fund</option>
                                        <option value="2">6?? Ano Fund</option>
                                        <option value="3">7?? Ano Fund</option>
                                        <option value="4">8?? Ano Fund</option>
                                        <option value="5">9?? Ano Fund</option>
                                        <option value="6">1?? Ano M??dio</option>
                                        <option value="7">2?? Ano M??dio</option>
                                        <option value="8">3?? Ano M??dio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="cadastrar">Cadastrar</button>
                                <button type="reset" class="btn btn-secondary" value="Reset">Limpar</button>
                                <!--<a href="http://localhost/sistemaEscola/view/visualizaralunos.php">
                                    <button class="btn btn-info mt-2">visualizar</button>
                                </a> -->
                            </div>
=======
                        <div>
                            <div class="mb-3">
                                <label for="nomeDisciplina" class="form-label">Nome da Disciplina</label>
                                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite nome da Disciplina" aria-label="Campo para nome da disciplina">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" value="cadastrar">Cadastrar</button>
                            <button type="reset" class="btn btn-secondary" value="Reset">Limpar</button>
                                <!--<a href="http://localhost/sistemaEscola/view/visualizaralunos.php">
                                    <button class="btn btn-info mt-2">visualizar</button>
                                </a> -->
                        </div>
>>>>>>> e8ed6d3b23bce6a43ae5763f414b1433016c8748
                    </div>
                </div>
            </div>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>