<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro usuário</h2>

    <form method="GET" action="processa.php">
    <label>Nome: </label>
    <input type="text" name="nome_cliente" placeholder="Digite o nome" required/><br><br>

    <label>E-mail: </label>
    <input type="email" name="email_cliente" placeholder="Digite o seu email" required/><br><br>

    <label>Senha: </label>
    <input type="password" name="senha_cliente" placeholder="Digite sua senha" required/><br><br>

    <input type ="submit" value="Cadastrar"/>

    </form>
</body>
</html>