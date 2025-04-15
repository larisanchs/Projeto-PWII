<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Dados do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body {
            font-family:'Open Sans', sans-serif;
            background-color:#793e9f;
            margin: 0;
            padding: 0;
        }
       
        h1 {
            color:#e8c283;
            text-align: center;
            font-weight: bold;
            margin-top: 70px;
        }
 
        form{
            background-color: #fff;
            border-radius: 28px;
            width: 80%;
            max-width: 700px; /*O formulário não pode passar de 500px de largura, mesmo que o contêiner ou a janela do navegador seja maior.*/
            padding: 20px;
            margin: 30px auto;
            height:600px;
            justify-content: center;
            text-align: center;
 
        }
 
        .campo{
            justify-content:left;
            align-items:left;
        }
 
        label{
            font-size: 16;
            font-family:'Open Sans', sans-serif;
            margin-bottom: 10px;
            display: block; /*Garante que cada label ocupe uma linha e empurre o input para baixo.*/
            justify-content: left;
            text-align: left;
            margin-left: 135px;
        }
        
        input[type="date"],
        input[type="text"],
        input[type="password"] {
            align-items:center;
            width: 400px;
            height:30px;
            padding: 8px;
            border-radius: 15px;
        }

        input[type="submit"] {
        background-color: #fcbf5b;
        color: #793e9f;
        padding: 12px 30px; /* Aumentei o padding para dar mais espaço ao botão */
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px; /* Ajustei o tamanho da fonte */
        width: auto; /* Deixei o botão ajustar o tamanho automaticamente com base no conteúdo */
        display: inline-block; /* Melhor controle sobre o tamanho do botão */
        margin: 30px auto 0; /* Mantive a centralização */
        text-align: center; /* Garante que o texto fique centralizado */
        }

        input[type="submit"]:hover {
            background-color: #f7b343;
            font-weight: bold;
            color: #793e9f;
        }
 
       
        .footer{
            font-size:12;
            color:#e8c283;
            text-align: center;
            margin-top: 10px;
        }

        a{
            color: #793e9f;
        }
        
        .nome{
            margin-top: 70px;
        }

        .value{
            text-align: center;
            margin-bottom:10px;
        }


    </style>    
</head>
 
<body>
<h1>Cadastre-se aqui:</h1><br>
<form method="post" action="processa_reserva.php">
    
        <label class="nome" >Nome Completo:</label>
        <input type="text" name="nome_cliente" placeholder="Digite o seu nome" required>
        <br><br>
        <label>Data de nascimento:</label>
        <input type="date" name="data_nasc" placeholder="Digite a data" required>
        <br><br>
        <label>E-mail:</label>
        <input type="text" name="email_cliente" placeholder="Digite o seu e-mail" required>
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha_cliente" placeholder="Crie sua senha" required>
        <br><br>
        <p>Já tem uma conta? <a href= "#">Clique aqui para entrar.</a></p>
        <input type="submit" value="Cadastrar">
    
</form>
 
<br>
 
<div class="footer">© By Hemilly e Larissa | 2025</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>