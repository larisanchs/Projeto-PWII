<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "controle";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nome = $_POST['nome_cliente'];
$data = $_POST['data_nasc'];
$email = $_POST['email_cliente'];
$senha = $_POST['senha_cliente'];

$query = "INSERT INTO cliente (nome_cliente, data_nasc, email_cliente, senha_cliente)
            VALUES('$nome','$data','$email','$senha')";

mysqli_query($conexao, $query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Dados do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #793e9f;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color:#e8c283;
            text-align: center;
            font-weight: bold;
            margin-top: 70px;
            margin-bottom: 60px;
        }
        
        .container {
            background-color: #fff;
            border-radius: 28px;
            width: 80%;
            max-width: 700px;
            padding: 20px;
            margin: 30px auto;
            height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Alinha os itens no centro verticalmente */
            align-items: center; /* Alinha os itens no centro horizontalmente */
            text-align: center;
        }

        .message {
            margin-top: 20px;
            padding: 12px 30px; /* Mesma estilização do botão */
            border-radius: 30px;
            background-color: #fcbf5b;
            color: #793e9f;
            font-weight: bold;
            display: inline-block;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .redirect {
            margin-top: 20px;
            font-size: 12;
            color: #555;
        }

        .footer {
            font-size: 12;
            color: #e8c283;
            text-align: center;
            margin-top: 60px;
        }

        a {
            color: #793e9f;
            font-size: 12;
        }

    </style>
</head>

<body>

<h1>Dados Processados</h1>

<div class="container">
    <img src="https://static.vecteezy.com/system/resources/thumbnails/011/858/556/small/green-check-mark-icon-with-circle-tick-box-check-list-circle-frame-checkbox-symbol-sign-png.png" alt="Confirmação de sucesso">
    <p class="message">Seus dados foram cadastrados com sucesso!</p>
    <p class="redirect">Para voltar ao formulário, <a href="index.php">clique aqui</a>.</p>
</div>

<div class="footer">© By Hemilly e Larissa | 2025</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
