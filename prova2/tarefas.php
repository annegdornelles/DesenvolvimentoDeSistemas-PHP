<!doctype html>
<html lang="en">
<head>
    <title>Gestão de Tarefas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>

<style>

        body{
            background-color: lightcyan;
        }
            
        main{
                margin:50px;
                padding-top: 5px;
                padding-left: 50px;
                padding-right: 50px;
                
        }

        
        h1{
                padding-bottom: 5px;
                text-align: center;
                padding-top: 70px;
            }

        header{
            background-color: lightblue;
            height: 60px;
            text-align: center;
        }

        a{
            color: black;
            padding: 10px;
        }

        p{
            text-align: center;
            color:red;
        }

    </style>

<body>

<header
                <nav
                class="nav justify-content-center  ">
                <a class="nav-link active" href="gerenciamentoProjetos.php" aria-current="page">Gerenciar projetos</a>
                <a class="nav-link" href="index.php">Login</a>
    </header>

    <h1>Selecione suas tarefas</h1>

    <main class="container mt-4">
        <form method="POST" action="src/controller/tarefasController.php">
            <div class="form-group mb-3">
                <label for="projeto">Pesquisar por projeto:</label>
                <select name="projetoId" class="form-control" id="projeto">
                    <option value="">Todos os projetos</option>
                    <option value="1">H2ORTA</option>
                    <option value="2">Reciclagem com robôs</option>
                    <option value="3">GANHAR O JESMA</option>
                    <option value="4">Energia com batatas</option>
                </select>
                <small id="helpId" class="form-text text-muted">Informe nome do projeto</small><br>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Nome da Tarefa</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nome do Projeto</th>
                        <th scope="col">Responsável</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                require_once 'src/controller/tarefasController.php';
                require_once 'src/controller/usuarioController.php';
                require_once 'src/controller/projetosController.php';

                if (isset($_GET['projetoId']) && $_GET['projetoId'] !== '') {
                    $projetoId = $_GET['projetoId'];
                    $tarefasList = tarefasLoadByProjetoId($projetoId);
                } 
                
                else {
                    $tarefasList = tarefasLoadAll();
                }

                $projetos = projetosLoadAll();
                $projetoNomes = [];
                foreach ($projetos as $projeto) {
                    $projetoNomes[$projeto['id']] = $projeto['nomeProjeto'];
                }

                foreach ($tarefasList as $tarefa) {
                    $nomeProjeto = isset($projetoNomes[$tarefa['projetoId']]) ? $projetoNomes[$tarefa['projetoId']] : 'Projeto desconhecido';
                    $nomeUsuario = usuariosLoadNameByID($tarefa['responsavelId']);
                    echo '<tr>';
                    echo '<td>' . $tarefa['tarefa'] . '</td>';
                    echo '<td>' . $tarefa['descricao'] . '</td>';
                    echo '<td>' . $tarefa['status'] . '</td>';
                    echo '<td>' . $nomeProjeto . '</td>';
                    echo '<td>' . $nomeUsuario . '</td>';
                    echo '</tr>';
                }
                ?>

                </tbody>
            </table>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
</html>
