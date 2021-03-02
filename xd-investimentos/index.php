<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XD Investimentos</title>

    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
<form method="GET" action="conversor.php">
    <h1>Conversão de moedas</h1>
        <div class="input-group">
        <label for="valor-reais">Digite o valor em Reais</label>
        <input type="number" name="valor-reais" id="valor-reais" required/>
        </div>

        <div class="input-group-radio">
        <input type="radio" id="dolar" name="moeda" value="dolar">
        <label for="dolar">Converter em Dólar</label><br>
        <input type="radio" id="euro" name="moeda" value="euro">
        <label for="euro">Converter em Euro</label>
        </div>
    <button>Enviar</button>
</form>
</body>
</html>