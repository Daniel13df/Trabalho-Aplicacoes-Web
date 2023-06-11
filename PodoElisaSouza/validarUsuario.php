<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$servidor = "db4free.net:3306";
$usuario = "danielsampaio";
$senha_db = "Daniel2022";
$db_name = "trabalhoweb";

$conn = new mysqli($servidor, $usuario, $senha_db, $db_name);

if($conn->connect_error){
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$resultado = $conn->query($sql);

if($resultado ->num_rows > 0){
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;

    if($email === "admin@podologia.com.br"){
        if(isset($_SESSION["email"]) & $_SESSION["email"] === "admin@podologia.com.br"){
        header("location:administrarUsuario.php");
        }

    else{
        header("location:paginaInicial.html");
    }
}   else {
    header("location:paginaInicial.html");
}
    
    
}else{
    session_unset();
    session_destroy();
    echo "<script>
    alert('Login ou senha incorreto'); window.location.href='index.html';
    </script>";
}


?>
