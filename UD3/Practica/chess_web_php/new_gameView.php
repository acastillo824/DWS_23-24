<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/peon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>CHESS_CastilloAdrian</title>
</head>
<body>

    <header>
        <h1 id="titulo">Nueva Partida</h1>
    </header>

    <nav>
        <div id="menu">
            <a class='enlaces' href="index.php">Home</a>
            <a class='enlaces' href="">Lista de partidas</a>
        </div>
        <div id='formulario'>
            <?php
                ini_set('display_errors', 1);
                ini_set('html_errors', 1);

                require("boardBusiness.php");

                $playersBL = new BoardBusiness();
                $infoPlayers = $playersBL->getPlayers();
                
                foreach ($infoPlayers as $players)
                {
                    echo "<div>";
                    print($players->getID()."\t");
                    print($players->getName());
                    echo "</div>";
                }

                echo "<form action=\"boardView.php\" method=\"POST\">";
                        echo "<label for=\"\">Jugador Blancas: </label>";
                        echo "<select name=\"jugador\" id=\"jugador\">";
                            echo "<option value=\"".$players->getID()."\">".$players->getName()."</option>";
                        echo "</select>";
                        // <br><br>
                        // <label for="">Jugador Negras: </label>
                        // <select name="jugador" id="jugador">
                        //     <option value="$idJugador">$nombreJugador</option>
                        // </select>
                        // <br><br>
                        // <label for="">Titulo de la partida: </label>
                        // <input id="botonEnviar" type="text">
                        // <br><br>
                        // <input type="submit" value="Enviar">
                    echo "</form>";
            ?>
            <form action="boardView.php" method="POST">

                <label for="">Jugador Blancas: </label>
                <select name="jugador" id="jugador">
                    <option value="$idJugador">$nombreJugador</option>
                </select>
                <br><br>
                <label for="">Jugador Negras: </label>
                <select name="jugador" id="jugador">
                    <option value="$idJugador">$nombreJugador</option>
                </select>
                <br><br>
                <label for="">Titulo de la partida: </label>
                <input id="botonEnviar" type="text">
                <br><br>
                <input type="submit" value="Enviar">

            </form>
        </div>
    </nav>

    <footer></footer>

</body>
</html>