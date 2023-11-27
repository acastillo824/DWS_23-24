<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);

class BoardDAtaAccess
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
}