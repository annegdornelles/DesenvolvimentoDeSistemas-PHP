
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
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <style>
         
         body{
            background-color:rgb(86, 153, 186);
         }

         h1{
            text-align: center;
            padding-top:30px;
         }

         main{
            margin:70px;
            background-color: rgb(67, 116, 140);
            padding:50px;
            border-radius: 20px;
         }

         .button{
             text-align: center;
             height: 40px;
         }

         p{
            color: red;
            text-align: center;
         }


    </style>

    <body>
        <header>
            <h1>Login</h1>
        </header>
        <main>
           <form method="POST" action="src/controller/loginController.php">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo isset($_COOKIE['email'])?$_COOKIE['email']:'';?>"/>
                <small id="helpId" class="form-text text-muted">Insira seu email</small>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha"/>
                <small id="helpId" class="form-text text-muted">Insira sua senha</small>
              </div>
              <label for="salvarEmail">Salvar email</label>
              <input type="checkbox" value="1" name="salvarEmail" id="salvarEmail" <?php echo (isset($_COOKIE['email']))?'checked':'';?> >
              <div class="button">
              <input name="logar" class="btn btn-dark" type="submit" value="Enviar"/>
        </div>
           </form>
            
            
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

<?php

session_start();

$cod = isset($_GET['cod']) ? $_GET['cod'] : null;

   if ($cod == '304'){
       echo '<p>Usuário não identificado.</p>';
}


?>

