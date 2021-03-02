<?php
//Se a variável não estiver setada, haverá um redirecionamento para index.php
if(!isset($_GET["nome-completo"])
    || !isset($_GET["rua"])
    || !isset($_GET["numero"])
    || !isset($_GET["quilowatts"])){

   header("location:index.php");
 }
//captura os dados enviados do formulário e aloca em variáveis
$nomeCompleto = $_GET["nome-completo"];
$rua = $_GET["rua"];
$numero = $_GET["numero"];
$quilowatts = $_GET["quilowatts"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Energia</title>
    <link rel="stylesheet" href="../styles-global.css"/>
</head>
<body class="fundo-result">
<?php

echo "Conta de luz de: <h1>$nomeCompleto </h1>";
echo "Rua: <h1>$rua </h1>";
echo "Conta de luz de: <h1>$numero </h1>";

if($quilowatts <= 120){
    $valorTotal = $quilowatts*0.32;
    echo "Consumo: <h1 style='color: blue'>$quilowatts</h1>";
    echo "<h1 style='color: green'>Obrigado por Economizar!</h1>";
}else{
    $valorTotal = $quilowatts*0.42;
    echo "Consumo: <h1 style='color: red'>$quilowatts</h1>";
}
echo "Valor a pagar:  <h1>R$" . number_format($valorTotal, 2, ",",".") . "</h1>";
?>
</body>
</html>