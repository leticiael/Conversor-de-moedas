<?php
include 'config.php'; 
$baseCurrency = 'BRL'; 
$targetCurrency = 'USD'; 
$exchangeRateApiUrl = "https://open.er-api.com/v6/latest?apikey=$apiKey&base=$baseCurrency";
$exchangeRateData = @file_get_contents($exchangeRateApiUrl);

if ($exchangeRateData === false) {
    die('Error fetching exchange rate.');
}

$exchangeRateData = json_decode($exchangeRateData, true);

if ($exchangeRateData === null || !isset($exchangeRateData['rates'][$targetCurrency])) {
    die('Error processing exchange rate data.');
}

$usdToBrlRate = $exchangeRateData['rates'][$targetCurrency];
$eurToBrlRate = $exchangeRateData['rates']['EUR'];
$gbpToBrlRate = $exchangeRateData['rates']['GBP']; 
$jpyToBrlRate = $exchangeRateData['rates']['JPY']; 

