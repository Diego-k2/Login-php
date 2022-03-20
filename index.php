
<?php
    include_once './conexao.php';
>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela de login utilizando o PHP">
    <meta name="autor" content="Diego-k2">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>Tela de Login</title>
</head>

<body class="display-flex azul-claro">
    <div class="caixa">
        <h1>Login</h1>
            <form action="sucesso.php" method="post">
                <label for="email">E-mail: </label><br>
                <input type="email" id="email"name="name" class="input-box"><br><br>
                <label for="senha">Senha: </label><br>
                <input type="password" id="nome" name="senha" class="input-box"><br>
                <input type="submit" name="enviar" value="Enviar" class="botoes verde-claro enquantoLogin"> 
                <a href="cadastro.html"><input type="button" name="cadastro" value="Cadastre-se" class="botoes vermelho equantoCadastro"></a>
            </form>
    </div>
</body>
</html>