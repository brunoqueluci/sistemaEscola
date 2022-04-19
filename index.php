<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Portal Escolar</title>
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
    <div class="conteiner">
        <div class="d-flex justify-content-center">
            <div class="col-3  d-flex align-items-center">
                <div class="row">
                    <form action="../projeto_escola/controller/aluno.php" method="POST">
                        <div>
                            <div class="mb-3">
                                <label for="nomeAluno" class="form-label">Nome do Aluno</label>
                                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite nome do Aluno" aria-label="Campo para nome do Aluno">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label for="Digite a matrícula do Aluno." class="form-label">Matricula</label>
                                <input class="form-control" type="text" id="matricula" name="matricula" placeholder="Digite a Matrícula" aria-label="Campo para Matricula do Aluno">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label for="Digite a data de Nascimento do aleno" class="form-label">Data de Nascimento</label>
                                <input class="form-control" type="date" id="data_nasc" name="data_nasc" placeholder="Data de Nascimento" aria-label="Campo para Matricula do Aluno">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>