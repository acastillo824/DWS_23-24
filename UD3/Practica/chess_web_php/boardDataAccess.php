<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);

class BoardDataAccess
{
    function __construct(){}
    function getPlayers()
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Chess');
		$consulta = mysqli_prepare($conexion, "SELECT ID, name, email, passwd FROM Chess.T_Players");
        $consulta->execute();
        $result = $consulta->get_result();

        $players = array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($players,$myrow);

        }
		return $players;
    }
    function insertMatch($idPLWH, $idPLBL, $matchName)
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Chess');
		$consulta = mysqli_prepare($conexion, "insert into Chess.T_Matches (title, white, black, startDate) value ('".$matchName."','".$idPLWH."','".$idPLBL."',NOW());");
        $consulta->execute();
    }
    function getMatches($orderList)
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Chess');
		// $consulta = mysqli_prepare($conexion, " select
        //                                             T_Matches.ID,
        //                                             title,
        //                                             startDate,
        //                                             status,
        //                                             winner,
        //                                             endDate,
        //                                             T_Players1.name as 'Jugador_Blancas',
        //                                             T_Players2.name as 'Jugador_Negras'
        //                                         from
        //                                             T_Matches 
        //                                         inner join T_Players as T_Players1 on T_Players1.ID = T_Matches.white
        //                                         inner join T_Players as T_Players2 on T_Players2.ID = T_Matches.black
        //                                         order by startDate ".$orderList.";");
        $consulta = mysqli_prepare($conexion, " select
                                                    T_Matches.ID,
                                                    title,
                                                    startDate,
                                                    status,
                                                    winner,
                                                    endDate,
                                                    white,
                                                    black
                                                from T_Matches order by startDate ".$orderList.";");
        $consulta->execute();
        $result = $consulta->get_result();

        $matches = array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($matches,$myrow);

        }
		return $matches;
    }
    
}