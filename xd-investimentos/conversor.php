<?php
//Se a variável não estiver setada, haverá um redirecionamento para index.php
if(!isset($_GET["valor-reais"])
     || !isset($_GET["moeda"])){

   header("location:index.php");
 }

//Cálculos
$valorReais = $_GET["valor-reais"];
$moeda = $_GET["moeda"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas - XD - Investimentos</title>
    <link rel="stylesheet" href="../styles-global.css"/>
</head>
<body class="fundo-result">
<?php

if ($moeda == "dolar") {
  echo "<h1>Valor total(R$<em>" . number_format($valorReais, 2, ",",".") . "</em>) em Dólar é: $ <em>" . number_format($valorReais / 5.41, 2, ",",".") . "<em></h1>";
}else{
  echo "<h1>Valor total(R$<em>" . number_format($valorReais, 2, ",",".") ." </em>) em Euro é: €  <em>" . number_format($valorReais / 6.57, 2, ",",".") . "<em></h1>";
}
?>
</body>
</html>