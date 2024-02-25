<?php
include 'config.php'; 
$amount = $usdAmount = $eurAmount = $gbpAmount = $jpyAmount = $cadAmount = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['amount'])) {
    ;
    $baseCurrency = 'BRL';
    $exchangeRateApiUrl = "https://open.er-api.com/v6/latest?apikey=$apiKey&base=$baseCurrency";
    $exchangeRateData = @file_get_contents($exchangeRateApiUrl);

    if ($exchangeRateData === false) {
        die('Erro ao obter a taxa de câmbio.');
    }

    $exchangeRateData = json_decode($exchangeRateData, true);

    if ($exchangeRateData === null) {
        die('Erro ao processar os dados da taxa de câmbio.');
    }

    $amount = $_POST['amount'];
    $usdToBrlRate = $exchangeRateData['rates']['USD'];
    $eurToBrlRate = $exchangeRateData['rates']['EUR'];
    $gbpToBrlRate = $exchangeRateData['rates']['GBP'];
    $jpyToBrlRate = $exchangeRateData['rates']['JPY']; 
    $cadToBrlRate = $exchangeRateData['rates']['CAD'];

    $usdAmount = $amount * $usdToBrlRate;
    $eurAmount = $amount * $eurToBrlRate;
    $gbpAmount = $amount * $gbpToBrlRate;
    $jpyAmount = $amount * $jpyToBrlRate; 
    $cadAmount = $amount * $cadToBrlRate; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
            <title>Conversor de Moedas</title>
                <link rel="stylesheet" href="style/style.css">
                <link rel="stylesheet" href="style/stylec.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    </head>
<body>

<div class="container"> 
<div class="image-containerm">
            <img src="./img/manpaper.png" alt="Imagem de leitura">
</div>
    <h2>Quanto vale?</h2>
    <form action="" method="post">
        <label for="amount">Valor em BRL:</label>
        <input type="text" id="amount" name="amount" required>
        <input type="submit" value="Converter">
        <br>
        
    </form>
    

    <?php if ($amount > 0): ?>
        <div class="result">
            <p><?php echo htmlspecialchars($amount); ?> BRL em USD: <?php echo number_format($usdAmount, 2, ',', '.'); ?> USD</p>
            <p><?php echo htmlspecialchars($amount); ?> BRL em EUR: <?php echo number_format($eurAmount, 2, ',', '.'); ?> EUR</p>
            <p><?php echo htmlspecialchars($amount); ?> BRL em GBP: <?php echo number_format($gbpAmount, 2, ',', '.'); ?> GBP</p>
            <p><?php echo htmlspecialchars($amount); ?> BRL em JPY: <?php echo number_format($jpyAmount, 2, ',', '.'); ?> JPY</p>
            <p><?php echo htmlspecialchars($amount); ?> BRL em CAD: <?php echo number_format($cadAmount, 2, ',', '.'); ?> CAD</p>
        </div>
        
    <?php endif; ?>
    <h1>Criação e Desenvolvimento: Letícia Eltermann</h1>
</div>

</body>

</html>


