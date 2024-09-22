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
        <header>
            <nav
                class="nav justify-content-center  ">
                <a class="nav-link active" href="tarefas.php" aria-current="page">Gerenciar tarefas</a>
                <a class="nav-link" href="index.php">Login</a>
            </nav>
            
        </header>
        <main>
            <h1>Selecione seus projetos</h1>
            <form method="POST" action="src/controller/projetosController.php">
            <div class="mb-3">
            <label for="projeto">Pesquisar por status do projeto:</label>
            <input type="text" class="form-control" name="status" placeholder=""/>
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
                                 
                                 if ($cod == '300') {
                                    echo '<p>O campo de status não pode ficar em branco.</p>';
                                  }
                                
                                 else {
                                    $projetosList = projetosLoadByStatusId($cod);
                                 }
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
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
