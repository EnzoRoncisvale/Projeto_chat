
<?php
$nome = htmlspecialchars($_GET['nome']);
$cpf = htmlspecialchars($_GET['cpf']);
$telefone = htmlspecialchars($_GET['telefone']);
$cep = htmlspecialchars($_GET['cep']);
$email= htmlspecialchars($_GET['email']);

$host = "localhost";
$user = "id21510287_enzo5515";
$pass = "Kyuubi12345@";
$dbname = "id21510287_bdprojeto";

$connection = mysqli_connect($host, $user, $pass, $dbname) or die(mysqli_error($connection));

$query = "INSERT INTO `Cliente` (`nome`, `cpf`, `telefone`, `cep`,`email`)
          VALUES ('$nome', '$cpf', '$telefone', '$cep',  '$email')";

if (mysqli_query($connection, $query)) {
    echo "Registro salvo com sucesso!";
} else {
    echo "Erro ao salvar: " . mysqli_error($connection);
}

mysqli_close($connection);
?>

