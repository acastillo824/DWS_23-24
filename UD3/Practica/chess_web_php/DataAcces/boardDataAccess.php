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
		$consulta = mysqli_prepare($conexion, "SELECT ID, name, email, passwd, perfil FROM Chess.T_Players");
        $consulta->execute();
        $result = $consulta->get_result();

        $players = array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($players,$myrow);

        }
		return $players;
    }
    function insertPlayers($name, $email, $passwd, $user)
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Chess');
		$consulta = mysqli_prepare($conexion, "INSERT INTO T_Players (ID, name, email, passwd, premium) VALUE (?,?,?,?);");
        $hash = password_hash($passwd, PASSWORD_DEFAULT);
        $consulta->bind_param("sss", $name,$email,$hash,$user);
        $consulta->execute();
    }
    function verifyPlayer($user, $passwd, $premium)
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
        mysqli_select_db($conexion, 'Chess');
        $consulta = mysqli_prepare($conexion, "select name,passwd,premium from T_Players where name = ?;");
        $sanitized_usuario = mysqli_real_escape_string($conexion, $user);       
        $consulta->bind_param("s", $sanitized_usuario);
        $consulta->execute();
        $res = $consulta->get_result();


        if ($res->num_rows==0)
        {
            return 'NOT_FOUND';
        }

        if ($res->num_rows>1) //El nombre de usuario debería ser único.
        {
            return 'NOT_FOUND';
        }

        $myrow = $res->fetch_assoc();
        $x = $myrow['passwd'];
        if (password_verify($passwd, $x))
        {
            return $myrow['premium'];
        } 
        else 
        {
            return 'NOT_FOUND';
        }
    }
    function insertMatch($idPLWH, $idPLBL, $matchName)
    {
        $conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Chess');
		$consulta = mysqli_prepare($conexion, "insert into Chess.T_Matches (title, white, black, startDate) value (?,?,?,NOW());");
        $consulta->bind_param("sss", $matchName,$idPLWH,$idPLBL);
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