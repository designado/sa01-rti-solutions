<?php
//Se a variável não estiver setada, haverá um redirecionamento para index.php
if(!isset($_GET["nome-funcionario"])
     || !isset($_GET["salario-atual"])){

   header("location:index.php");
 }
//captura os dados enviados do formulário e aloca em variáveis
$nomeFuncioario = $_GET["nome-funcionario"];
$salarioAtual = $_GET["salario-atual"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário = Fullbank</title>
    <link rel="stylesheet" href="../styles-global.css"/>
</head>
<body class="fundo-result">
<?php

if($salarioAtual <= 5000){
   echo "<h1>O Funcionário <em>$nomeFuncioario</em> passará a receber R$ <em>" . number_format(($salarioAtual * 0.2) + $salarioAtual, 2, ",",".") . "<em></h1>";
} else{
   echo "<h1>O Funcionário<em> $nomeFuncioario</em> passará a receber R$ <em>" . number_format(($salarioAtual * 0.1) + $salarioAtual, 2, ",",".") . "<em></h1>";
}
?>
</body>
</html>