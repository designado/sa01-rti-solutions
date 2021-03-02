<?php
//Se a variável não estiver setada, haverá um redirecionamento para index.php
if(!isset($_POST["valor1"])
    || !isset($_POST["valor2"])
    || !isset($_POST["valor3"])
    || !isset($_POST["valor4"])
    || !isset($_POST["valor5"])){

   header("location:index.php");
 }
//captura os dados enviados do formulário e aloca em variáveis
foreach ($_POST as $value){
$total = array_sum($_POST);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Valores</title>
    <link rel="stylesheet" href="../styles-global.css"/>
</head>
<body class="fundo-result">
<?php
echo "O Valor total dos números é:" . $total; 
?>
</body>
</html>