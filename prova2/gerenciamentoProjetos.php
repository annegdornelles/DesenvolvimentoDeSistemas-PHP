<!doctype html>
<html lang="en">
    <head>
        <title>Gerenciamento de Projetos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="./css/bootstrap.min.css"
            rel="stylesheet"
        />

        <script
            src="./js/bootstrap.bundle.min.js"
        ></script>
    </head>

    </main>

    <style>

        body{
            background-color: lightcyan;
        }
            
        main{
                margin:50px;
                padding: 30px;
                
        }

        
        h1{
                padding-bottom: 20px;
                text-align: center;
            }

        header{
            background-color: lightblue;
            height: 60px;
            text-align: center;
        }

        p{
            text-align: center;
            color:red;
        }

        .nav-link{
            color: black;
            padding: 20px;
        }

        .nav-link:hover{
            text-decoration: underline;
            color: black;
        }

    </style>

    <body>
        <header>
            <nav
                class="nav justify-content-center  ">
                <a class="nav-link" href="tarefas.php" aria-current="page">Gerenciar tarefas</a>
                <a class="nav-link" href="index.php">Login</a>
            </nav>
            
        </header>
        <main>
            <h1>Selecione seus projetos</h1>
            <form method="POST" action="src/controller/projetosController.php">
            <div class="mb-3">
            <label for="projeto">Pesquisar por status do projeto:</label>
                    <select class="form-control" name="status">
                        <option value="">Selecione o status</option>
                        <option value="Em andamento">Em andamento</option>
                        <option value="Pendente">Pendente</option>
                        <option value="Concluído">Concluído</option>
                    </select>
                    <small id="helpId" class="form-text text-muted">Informe status do projeto</small><br>
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
            </form>

            <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Projeto</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                            require_once __DIR__ . "/src/controller/projetosController.php";

                            $projetosList = projetosLoadAll();

                            if (isset($_REQUEST['cod'])) {
                                 $cod = $_REQUEST['cod'];
                                 
                                 /*if ($cod == '300') {
                                    echo '<p>O campo de status não pode ficar em branco.</p>';
                                  }
                                
                                 else {*/
                                    $projetosList = projetosLoadByStatusId($cod);
                                 //}
                                 }

                                foreach ($projetosList as $key => $value) {
                                     echo '<tr>';
                                     echo '<td>' . $value['nomeProjeto'] . '</td>';
                                     echo '<td>' . $value['status'] . '</td>';
                                     echo '</tr>';
}
?>



                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
    </body>
</html>
