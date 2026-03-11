<?php
// Configuração básica
header('Content-Type: text/html; charset=utf-8');

// Sua lógica PHP aqui
$mensagem = "Olá, Mundo!";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1><?php echo $mensagem; ?></h1>
    <p>Bem-vindo ao seu projeto PHP!</p>
</body> 
</html>