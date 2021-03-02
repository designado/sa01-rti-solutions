<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullbank</title>

    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
<form method="GET" action="calcula-salario.php">
    <h1>Atualização Salarial</h1>
        <div class="input-group">
        <label for="nome-funcionario">Nome do funcionário</label>
        <input type="text" name="nome-funcionario" id="nome-funcionario" required/>
        </div>
        <div class="input-group">
        <label for="salario-atual">Salário Atual</label>
        <input type="number" name="salario-atual" id="salario-atual" required/>
        </div>
     <button>Enviar</button> 
</form>
</body>
</html>