<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board View</title>
</head>
<body>
    <?php
        require("bordBusiness.php");
        $playersBL = new BoardBusiness();
        $infoPlayers = $playersBL->getPlayers();
        
        foreach ($infoPlayers as $players)
        {
            echo "<div>";
            print($pelicula->getID()."->\t");
            print($pelicula->getName());
            echo "</div>";
        }
    ?>
</body>
</html>