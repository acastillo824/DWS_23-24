<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleNewGame.css">
    <link rel="icon" type="image/x-icon" href="img/peon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>CHESS_CastilloAdrian</title>
</head>
<body>

    <header>
        <h1 id="title">Nueva Partida</h1>
    </header>

    <nav>
        <div id="menu">
            <a class='link' href="../index.php">Home</a>
            <a class='link' href="gameListView.php?order=asc">Lista de partidas</a>
        </div>
        <h2>Formulario de registro:</h2>
        <div id='form'>
            <?php
                ini_set('display_errors', 1);
                ini_set('html_errors', 1);

                require("../Business/boardBusiness.php");

                $playersBL = new BoardBusiness();
                $infoPlayers = $playersBL->getPlayers();
                
                echo "<form action='boardView.php' method='POST'>";
                    echo "<label for=\"\">Jugador Blancas: </label>";
                    echo "<select name=\"playerWhite\" id=\"playerWhite\">";
                        foreach ($infoPlayers as $players)
                        {
                            echo "<option value='".$players->getID()."'>".$players->getName()."</option>";
                        }
                    echo "</select><br><br>";
                    echo "<label for=\"\">Jugador Negras: </label>";
                    echo "<select name=\"playerBlack\" id=\"playerBlack\">";
                        foreach ($infoPlayers as $players)
                        {
                            echo "<option value='".$players->getID()."'>".$players->getName()."</option>";
                        }
                    echo "</select><br><br>";
   
                    echo "<label for=''>Titulo de la partida: </label>";
                    echo "<input type='text' name='matchName'/>";
                    echo "<br><br>";
                    echo "<input id='send' type=\"submit\" value=\"Enviar\">";
                echo "</form>";
            ?>
        </div>
    </nav>

    <footer>by Adrian Castillo©</footer>

</body>
</html>