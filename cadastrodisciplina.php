<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno | Portal Escolar</title>
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
    <form action="../sistemaEscola/controller/controller_disciplina.php" method="POST">
        <div class="conteiner">
            <div class="d-flex justify-content-center my-auto px-md-5">
                <div class="col-3 d-flex px-md-5 py-md-2 align-items-center">
                    <div class="row">
                        <div>
                            <h1>Cadastro Disciplina</h1>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label for="nomeAluno" class="form-label">Nome da Disciplina</label>
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
                    </div>
                </div>
            </div>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>