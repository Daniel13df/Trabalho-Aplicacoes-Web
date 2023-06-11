<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">    
    <title>Cadastrar Usuário</title>
</head>
<body>
    

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

$servidor = "db4free.net:3306";
$usuario = "danielsampaio";
$senha_db = "Daniel2022";
$db_name = "trabalhoweb";

$conn = new mysqli($servidor,$usuario,$senha_db,$db_name);

if($conn ->connect_error){
    die("Falha na conexão com o banco de dados: ".$conn->connect_error);
}
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome', '$email', '$senha')";

if($conn->query($sql)===TRUE){
     echo "<script>alert('Usuário registrado com sucesso!'); window.location.href='index.html'</script>";
}else{
    echo "<script>alert('Erro ao registrar o usuário')</script>".$conn->error;
}

$conn->close();
}
?>
</body>
</html>
