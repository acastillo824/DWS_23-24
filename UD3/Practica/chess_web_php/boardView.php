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
        <h1 id="titulo">BOARDVIEW</h1>
    </header>

    <nav>
        <div id="menu">
            <a class='enlaces' href="new_gameView.php">Nueva Partida</a>
            <a class='enlaces' href="gameListView.php?order=asc">Lista de partidas</a>
        </div>
        
        <?php
            // ini_set('display_errors', 1);
            // ini_set('html_errors', 1);
            require("boardBusiness.php");
            $playersBL = new BoardBusiness();            
            $idWHPlayer = $_POST["playerWhite"];
            $idBLPlayer = $_POST["playerBlack"];
            $matchName = $_POST["matchName"];            
            $playersBL->insertMatch($idWHPlayer, $idBLPlayer, $matchName);
        ?>

        
        
    </nav>

    <footer></footer>

</body>
</html>
    <?php
        
        

        
    ?>
