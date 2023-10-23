<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chess_game_style.css">
    <title>Chess PVP</title>
</head>
<body>
    <h1>CHESS PVP</h1>
    <?php
        function DrawChessGame($board)
        {
            echo "<table>";
            for ($fila=0; $fila < 8; $fila++) { 
                echo "<tr>";
                for ($columna=0; $columna < 8; $columna++) { 
                    echo "<tr></tr>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        DrawChessGame("Hola");
    ?>
</body>
</html>