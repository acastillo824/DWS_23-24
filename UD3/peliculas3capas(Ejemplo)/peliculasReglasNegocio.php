<?php

require("peliculasAccesoDatos.php");

class PeliculasReglasNegocio
{
    private $_ID;
    private $_Titulo;
    private $_Año;
    private $_Duracion;
    private $_Sinopsis;
    private $_Imagen;
    private $_Votos;

	function __construct()
    {
    }

    function init($id,$titulo, $año, $duracion, $sinopsis, $imagen, $votos)
    {
        $this->_ID = $id;
        $this->_Titulo = $titulo;
        $this->_Año = $año;
        $this->_Duracion = $duracion;
        $this->_Sinopsis = $sinopsis;
        $this->_Imagen = $imagen;
        $this->_Votos = $votos;
    }

    function getID()
    {
        return $this->_ID;
    }

    function getTitulo()
    {
        return $this->_Titulo;
    }
    function getAño()
    {
        return $this->_Año;
    }
    function getDuracion()
    {
        return $this->_Duracion;
    }
    function getSinopsis()
    {
        return $this->_Sinopsis;
    }
    function getImagen()
    {
        return $this->_Imagen;
    }
    function getVotos()
    {
        return $this->_Votos;
    }


    function obtener($categoria)
    {
        $peliculasDAL = new PeliculasAccesoDatos();
        $rs = $peliculasDAL->obtener($categoria);
		$listaPeliculas =  array();
        foreach ($rs as $pelicula)
        {
            $oPeliculasReglasNegocio = new PeliculasReglasNegocio();
            $oPeliculasReglasNegocio->Init($pelicula['ID'],$pelicula['titulo'],$pelicula['año'],$pelicula['duracion'],$pelicula['sinopsis'],$pelicula['imagen'],$pelicula['Votos']);
            array_push($listaPeliculas,$oPeliculasReglasNegocio);
        }
        
        return $listaPeliculas;
    }
}

