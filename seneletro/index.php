
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seneletro</title>
  <link rel="stylesheet" href="../styles-global.css" />
</head>

<body>
  <form method="GET" action="calcula-consumo.php">
    <h1>Calculo de Consumo de Energia</h1>
    
    <div class="input-group">
      <label for="nome-completo">Nome Completo</label>
      <input type="text" name="nome-completo" id="nome-completo" required/>
    </div>

    <div class="input-group">
      <label for="rua">Rua</label>
      <input type="text" name="rua" id="rua" required/>
    </div>

    <div class="input-group">
      <label for="numero">Número</label>
      <input type="number" name="numero" id="numero" required/>
    </div>

    <div class="input-group">
      <label for="quilowatts">Quilowatts/h</label>
      <input type="number" name="quilowatts" id="quilowatts" required />
    </div>

    <button>Enviar</button>
  </form>
</body>
</html>

