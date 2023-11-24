<?php
// Conectar ao banco de dados 
$host = "localhost";
$user = "id21510287_enzo5515";
$pass = "Kyuubi12345@";
$dbname = "id21510287_bdprojeto";

$connection = mysqli_connect($host, $user, $pass, $dbname) or die(mysqli_connect_error());

// Consultar mensagens no banco de dados
$query = "SELECT * FROM `chat` ORDER BY `id` DESC";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>{$row['mensagem']}</div>";
}

mysqli_close($connection);
?>
