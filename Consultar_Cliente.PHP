<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Consultar Cliente</title>
</head>
<body>
    <h2 class="titulo">Consultar Cliente</h2>
    <form method="get" action="listarClientes.php">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario"><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="CPF" id="cpf"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone"><br><br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep"><br><br>

        <input type="submit" value="Consultar">
    </form>
    <button class="botao" onclick="window.location.href='IncluirCliente.php'">Incluir Cliente</button>
</body>
</html>


