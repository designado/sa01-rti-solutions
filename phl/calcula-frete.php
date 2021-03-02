<?php
//Se a variável não estiver setada, haverá um redirecionamento para index.php
if(!isset($_GET["origem"])
    || !isset($_GET["destino"])
    || !isset($_GET["distancia"])
    || !isset($_GET["pedagios"])){

   header("location:index.php");
 }

//captura os dados enviados do formulário e aloca em variáveis
$origem = $_GET["origem"];
$destino = $_GET["destino"];
$distancia = $_GET["distancia"];
$pedagios = $_GET["pedagios"];

//cálculos
$custoPedagio = $pedagios * 9.4;
$custoDistancia = $distancia * 6;
$custoTotal = $custoPedagio + $custoDistancia;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Frete PHL</title>
    <link rel="stylesheet" href="../styles-global.css"/>
</head>
<body class="fundo-result">

<!-- Se o valor do pedágio for maior que 100, exibir em vermelho -->
<?php

if($custoPedagio > 100){
    echo "<h1 style='color: red'>Valor dos pedágio R$ <em>" . number_format($custoPedagio, 2, ",",".") ."<em></h1>";
}else{
 //   echo "<h1>Valor dos pedágio R$ <em> $custoPedagio<em></h1>";
 echo "<h1>Valor dos pedágio R$ <em>" . number_format($custoPedagio, 2, ",",".") . "<em></h1>";
}
?>
<h1>A viagem de <em><?= $origem ?></em> à <em><?= $destino ?></em> irá custar R$ <em><?= number_format($custoTotal, 2, ",",".") ?>.</em></h1>
</body>
</html>