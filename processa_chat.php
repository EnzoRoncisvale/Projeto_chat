<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mensagem = $_POST['mensagem'];

    // Conectar ao banco de dados (substitua com suas credenciais)
    $host = "localhost";
    $user = "id21510287_enzo5515";
    $pass = "Kyuubi12345@";
    $dbname = "id21510287_bdprojeto";

    $connection = mysqli_connect($host, $user, $pass, $dbname) or die(mysqli_connect_error());

    // Inserir mensagem no banco de dados
    $query = "INSERT INTO `chat` (`mensagem`) VALUES ('$mensagem')";
    mysqli_query($connection, $query);

    mysqli_close($connection);
}

// Redirecionar de volta para o chat
header("Location: index.php");
?>
