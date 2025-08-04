<?php
// Captura os dados enviados pelo formulário
$name = $_POST["name"];
$email = $_POST["email"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
</head>
<body>
    <h1>Boas-vindas, <?php echo htmlspecialchars($name); ?>!</h1>
    <p>Seu e-mail é: <?php echo htmlspecialchars($email); ?></p>
    <p>Obrigado por se cadastrar!</p>
    <a href="index.html">Voltar ao formulário</a>
</body>
</html>
