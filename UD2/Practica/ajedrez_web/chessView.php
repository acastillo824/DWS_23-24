<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chess_game_style.css">
    <title>ChessPVP</title>
</head>
<body>
    <h1>CHESS PVP</h1>
        <?php
            ini_set('display_errors', 1);
            ini_set('html_errors', 1);

            function DrawChessGame($board)
            {
                
                // Array con todas las piezas del ajedrez
                $arrayPiezas = explode(",", $board);
                $k = 0;

                echo "<table>";

                for ($i=0; $i < 8; $i++) 
                { 
                    echo "<tr>";
                    for ($j=0; $j < 8; $j++) 
                    { 
                        esPieza($arrayPiezas[$k]);
                        $k++;
                    }
                    echo "</tr>";
                    
                }
                echo "</table><br>";

            }

            function esPieza($pieza)
            {
                if ($pieza[0] == 'R' && $pieza[3] == 'L'|| $pieza[0] == 'K' && $pieza[3] == 'L'|| $pieza[0] == 'B' && $pieza[3] == 'L'|| $pieza[0] == 'Q' && $pieza[3] == 'L'|| $pieza[0] == 'P'&& $pieza[3] == 'L') {
                    
                    echo "<td class=\"black\">".$pieza."</td>";
                }else if($pieza[0] == 'R' && $pieza[3] == 'H'|| $pieza[0] == 'K' && $pieza[3] == 'H'|| $pieza[0] == 'B' && $pieza[3] == 'H'|| $pieza[0] == 'Q' && $pieza[3] == 'H'|| $pieza[0] == 'P'&& $pieza[3] == 'H'){
                    
                    echo "<td class=\"white\">".$pieza."</td>";
                }else {
                    echo '<td class=\"white\"></td>';
                }
            }

            DrawChessGame("ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,0000,####,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");
            
        ?>
</body>
</html>