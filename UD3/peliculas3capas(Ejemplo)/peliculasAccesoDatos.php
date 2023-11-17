<?php

class PeliculasAccesoDatos
{
	
	function __construct()
    {
    }

	function obtener($categoria)
	{
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Peliculas');
		$consulta = mysqli_prepare($conexion, "select ID,titulo from T_Peliculas WHERE id_categoria = '".$categoria."'");
        $consulta->execute();
        $result = $consulta->get_result();

		$peliculas =  array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($peliculas,$myrow);

        }
		return $peliculas;
	}

	function obtenerCategorias()
	{
		$conexion = mysqli_connect('localhost','root','12345');
		if (mysqli_connect_errno())
		{
				echo "Error al conectar a MySQL: ". mysqli_connect_error();
		}
 		mysqli_select_db($conexion, 'Peliculas');
		$consulta = mysqli_prepare($conexion, "select ID,titulo from T_Categorias");
        $consulta->execute();
        $result = $consulta->get_result();

		$categorias =  array();

        while ($myrow = $result->fetch_assoc()) 
        {
			array_push($categorias,$myrow);

        }
		return $categorias;
	}
	
}




















