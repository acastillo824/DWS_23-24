<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board View</title>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('html_errors', 1);
        require("boardBusiness.php");
        $playersBL = new BoardBusiness();
        $infoPlayers = $playersBL->getPlayers();
        
        $idWHPlayer = $_POST["playerWhite"];
        $idBLPlayer = $_POST["playerBlack"];
        $matchName = $_POST["matchName"];
        
        $playersBL->insertMatch($idWHPlayer, $idBLPlayer);
        

        
    ?>
</body>
</html>