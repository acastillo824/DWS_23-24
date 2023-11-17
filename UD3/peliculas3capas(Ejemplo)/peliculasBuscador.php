<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    <h3>Elige una categoria:</h3>
    <form action="peliculasVista.php" method="post">
        <select name="categoria" id="categoria">
          <option value="0">Terror</option>
          <option value="1">Accion</option>
        </select>
        <input type="submit" name="Enviar">
    </form> 
</body>
</html>