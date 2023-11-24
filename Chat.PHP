<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['Mensagens'])) {
        echo "Olá, comece a conversar";
    } else {
        $Mensagens =  $_POST['Mensagens'];
        $email = $_POST['email'];

        $host = "localhost";
        $user = "id21510287_enzo5515";
        $pass = "Kyuubi12345@";
        $dbname = "id21510287_bdprojeto";

        $connection = mysqli_connect($host, $user, $pass, $dbname) or die(mysqli_connect_error());

        $query = "INSERT INTO `Chat` (`Nome`,`Data`,`Mensagens`, `email`) VALUES ( '$email', 'hoje','$Mensagens', '$email')";

        if (mysqli_query($connection, $query)) {
            // Sucesso
        } else {
            echo "Erro ao enviar a mensagem: " . mysqli_error($connection);
        }

        mysqli_close($connection);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="chat.css">
    <title>Chat da Rede Social</title>
</head>
<body>
    <form method="post" action="Chat.php">
        <div class="chat-container">
            <div class="chat-messages">
                <?php
                $host = "localhost";
                $user = "id21510287_enzo5515";
                $pass = "Kyuubi12345@";
                $dbname = "id21510287_bdprojeto";

                $connection = mysqli_connect($host, $user, $pass, $dbname) or die(mysqli_errno($connection).": ".mysqli_error($connection). "<BR>");

                $query = "SELECT * FROM Chat ";
                echo "escolha alguém para conversar";

                $resp = mysqli_query($connection, $query) or die('Erro ao consultar');

                while($rowp = mysqli_fetch_array($resp)){
                    ?>
                    <div class="message own">
                        <div class="message-text"><?php echo $rowp["Email"]; ?>:<br/><?php echo $rowp["Mensagens"]; ?></div>
                    </div>
                    <?php
                }

                mysqli_close($connection);
                ?>
            </div>
            <div class="chat-input">
                <input type="email" name="email" id="email" required>
                <input type="text"  name="Mensagens"  placeholder="Digite sua mensagem">
                <input type="submit" value="Enviar">
            </div>
        </div>
    </form>
</body>
</html>
