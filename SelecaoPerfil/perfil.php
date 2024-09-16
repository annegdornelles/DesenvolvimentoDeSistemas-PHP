<!doctype html>
<html lang="en">
    <head>
        <title>Seleção de perfil</title>
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

        body {
            background-color: rgb(86, 153, 186);
        }

        h1 {
            text-align: center;
            padding-top: 30px;
            padding-bottom: 50px;
        }

        .selecao {
            background-color: rgb(67, 116, 140);
            color: black;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            display: block;
            width: 100%;
            font-size: 20px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .selecao:hover{
            background-color: rgb(33, 36, 38);
            color: rgb(67, 116, 140);
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
        }

    </style>

    <body>
        <header>
            <!-- place navbar here -->
        </header>

        <h1>Selecione um perfil:</h1>

        <main>
            <a class="selecao" href="src/controller/perfilController?perfil=adm.php">Sou Administrador</a>
            <a class="selecao" href="src/controller/perfilController?perfil=usuario.php">Sou Usuário</a>
            <a class="selecao" href="src/controller/perfilController?perfil=moderador.php">Sou Moderador</a>
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
