<?php
    $nome = htmlspecialchars($_GET['nome']);
    $cpf = htmlspecialchars($_GET['cpf']);
    $telefone = htmlspecialchars($_GET['telefone']);
    $email = htmlspecialchars($_GET['email']);
    $cep = htmlspecialchars($_GET['cep']);

    $host = "localhost";
    $user = "id21510287_enzo5515";
    $pass = "Kyuubi12345@.";
    $dbname = "id21510287_bdprojeto";

    $connection = mysqli_connect($host, $user, $pass, $dbname) or die(mysqli_errno($connection).": ".mysqli_error($connection). "<BR>");

    $query = "SELECT * FROM Cliente WHERE Nome = '".$nome."' OR Telefone = '".$telefone."'";
    echo $query;

    $resp = mysqli_query($connection, $query) or die('Erro ao consultar');

    echo "<TABLE border = 1>";
    while($rowp = mysqli_fetch_array($resp)){
        $Nome = $rowp["Nome"];
        echo "<br/>Nome";
        echo " <TR>
                <TD>Telefone</TD>
                <TD>".$rowp["Telefone"]."</TD>
              </TR>";
    }
    echo "</TABLE>";
?>
