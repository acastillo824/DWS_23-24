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
    function insertMatch($idPLWH, $idPLBL)
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Chess');
		$consulta = mysqli_prepare($conexion, "insert into Chess.T_Matches (white, black, startDate) value ('".$idPLWH."','".$idPLBL."',NOW());");
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
		$consulta = mysqli_prepare($conexion, "SELECT ID, white, black, startDate, endDate, winner, status FROM Chess.T_Matches ORDER BY startDate ".$orderList.";");
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