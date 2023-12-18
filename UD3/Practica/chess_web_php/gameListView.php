<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleList.css">
    <link rel="icon" type="image/x-icon" href="img/peon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>CHESS_CastilloAdrian</title>
</head>
<body>
    <header>
        <h1 id="title">Lista de Partidas</h1>
    </header>

    <nav>
        <div id="menu">
            <a class='link' href="index.php">Home</a>
            <a class='link' href="new_gameView.php">Nueva Partida</a>
        </div>
        <div id="filter">
            <h3>Fecha:</h3>
            <a class="orderButton" href="gameListView.php?order=asc">ASC</a>
            <a class="orderButton" href="gameListView.php?order=desc">DESC</a>
        </div>
        <div id='matchList'>
        <!-- Hacer un formulario que haga de filtro para la tabla -->
            <table>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Fecha Inicio </th>
                    <th>Hora Inicion</th>
                    <th>Estado</th>
                    <th>Ganador</th>
                    <th>Fecha Fin</th>
                    <th>Hora Fin</th>
                    <th>Piezas Blancas</th>
                    <th>Piezas Negras</th>
                </tr>
                <?php
                            ini_set('display_errors', 1);
                            ini_set('html_errors', 1);
                            $orderList = $_GET['order'];
                            require("matchBusiness.php");               
                            $matchesBL = new MatchBusiness();
                            $infoMatch = $matchesBL->getMatches($orderList);
                            $dateList = array();
                            foreach ($infoMatch as $match)
                            {
                                echo "<tr>";
                                print('<td>'.$match->getID().'</td>');
                                print('<td><a href="boardView.php?idMatch='.$match->getID().'">'.$match->getTitle().'</a></td>');
                                print('<td>'.$match->getStartDate().'</td>');
                                print('<td>'.$match->getStartDate().'</td>');
                                print('<td>'.$match->getStatus().'</td>');
                                print('<td>'.$match->getWinner().'</td>');
                                print('<td>'.$match->getEndDate().'</td>');
                                print('<td>'.$match->getEndDate().'</td>'); 
                                print('<td>'.$match->getWhite().'</td>');
                                print('<td>'.$match->getBlack().'</td>');
                                echo "</tr>";
                            }
                        ?>
            </table>
        </div>
    </nav>

    <footer>
        by Adrian Castillo©
    </footer>

</body>
</html>