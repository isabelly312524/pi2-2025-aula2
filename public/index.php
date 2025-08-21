<?php
$nome = $_GET['nome'];
$mensagem = "Boa noite $nome";

$n1 = 10;
$n2 = 30;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/default.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>PHP & Mysql</h1>
    <p><?= $mensagem ?></p>
    <h1>Teste</h1>
    <?= $n1 + $n2 ?>
</body>
</html>