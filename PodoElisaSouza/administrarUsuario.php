<?php
    
        session_start();

        if(!isset($_SESSION["email"])){
            header("location:paginaInicial.html");
            exit;
        }
        $email = $_SESSION["email"];

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <title>Adminstração de Usuário</title>
</head>
<body class="fundo">
    <main>
        <section class="pagina-lateral">
            <div>
                <a href="#" >
                    <h1 class="logoL2" >Gerencie os <br><span>usuários</span></h1>
                </a>
            </div>

            <input type="button" value="Tela Inicial" onclick="redirecionarPaginaInicial()">

            <a href="logout.php">Sair</a>
        </section>
        <section class="pagina-principal">

        </section>
    </main>

    <script>
        function redirecionarPaginaInicial(){
            window.location.href="paginaInicial.html"
        }
    </script>

    
</body>
</html>