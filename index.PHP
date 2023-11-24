<!DOCTYPE html>
<html>
<head>
     
     <link rel="icon" href="macaco-fumante1.png" type="image/x-icon">
     <link rel="stylesheet" href="style.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h2 class="titulo">Cadastro de Pessoas</h2>
    <form method="get" action="SalvarCliente.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required><br><br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" required><br><br>
        
        <label for "telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <div class="botaocontainer">
        <a href="IncluirCliente.php" class="botao">Incluir Cliente</a>
        <a href="ConsultarCliente.php" class="botao">Consultar Cliente</a>
        <a href="Chat.php" class="botaochat">Ir para o Chat</a>
       
    </div>
</body>
</html>
