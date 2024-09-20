<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
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

        <style>

            p{
                color:red;
                text-align: center;
            }
            
            main{
                background-color:lightblue;
                margin:50px;
                padding: 30px;
                border-radius: 10px;
            }

            body{
                background-color: lightcyan;
            }

            h1{
                padding-bottom: 20px;
                text-align: center;
            }


        </style>

    </head>

    <body>
        <header>
            
            <!-- place navbar here -->
        </header>
        <main>
        <h1>Login</h1>
            <form method="POST" action="src/controller/usuarioController.php">
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder=""/>
                <small id="helpId" class="form-text text-muted">Insira seu email aqui.</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder=""/>
                <small id="helpId" class="form-text text-muted">Insira sua senha aqui.</small>
            </div>
           <input type="submit" class="btn btn-primary" value="Enviar">
           
            </div>
            
            </form>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
    </body>
</html>

<?php

   session_start();

   if(isset($_GET['cod'])){

   $cod = $_GET['cod'];

   if ($cod == '304'){
    echo '<p>Usuário não identificado</p>';
}}

?>