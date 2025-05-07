<?php
// Recebe os dados do formulário
$nomeCliente = $_POST['nomeCliente'];
$produto1 = $_POST['produto1'];
$valor1 = floatval($_POST['valor1']);
$produto2 = $_POST['produto2'];
$valor2 = floatval($_POST['valor2']);
$valorPago = floatval($_POST['valorPago']);
 
// Calcula o total e o troco
$totalGasto = $valor1 + $valor2;
$troco = $valorPago - $totalGasto;
 
// Formata os valores monetários
$totalFormatado = number_format($totalGasto, 2, ',', '.');
$trocoFormatado = number_format($troco, 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Nota Fiscal</h1>
        <div class="nota-fiscal">
            <p><strong>Cliente:</strong> <?php echo htmlspecialchars($nomeCliente); ?></p>
            <p><strong>Produto 1:</strong> <?php echo htmlspecialchars($produto1); ?> - R$ <?php echo number_format($valor1, 2, ',', '.'); ?></p>
            <p><strong>Produto 2:</strong> <?php echo htmlspecialchars($produto2); ?> - R$ <?php echo number_format($valor2, 2, ',', '.'); ?></p>
            <hr>
            <p><strong>Total Gasto:</strong> R$ <?php echo $totalFormatado; ?></p>
            <p><strong>Valor Pago:</strong> R$ <?php echo number_format($valorPago, 2, ',', '.'); ?></p>
            <p><strong>Troco:</strong> R$ <?php echo $trocoFormatado; ?></p>
        </div>
        <a href="index.html" class="voltar">Voltar</a>
    </div>
</body>
</html>
 