<?php

require("peliculasAccesoDatos.php");

class PeliculasReglasNegocio
{
    private $_ID;
    private $_Titulo;

	function __construct()
    {
    }

    function init($id,$titulo)
    {
        $this->_ID = $id;
        $this->_Titulo = $titulo;
    }

    function getID()
    {
        return $this->_ID;
    }

    function getTitulo()
    {
        return $this->_Titulo;
    }


    function obtener($categoria)
    {
        $peliculasDAL = new PeliculasAccesoDatos();
        $rs = $peliculasDAL->obtener($categoria);
		$listaPeliculas =  array();
        foreach ($rs as $pelicula)
        {
            $oPeliculasReglasNegocio = new PeliculasReglasNegocio();
            $oPeliculasReglasNegocio->Init($pelicula['ID'],$pelicula['titulo']);
            array_push($listaPeliculas,$oPeliculasReglasNegocio);
        }
        
        return $listaPeliculas;
    }

    function obtenerCategorias()
    {
        $peliculasDAL = new PeliculasAccesoDatos();
        $rs = $peliculasDAL->obtenerCategorias();
		$listaCategorias =  array();
        foreach ($rs as $categorias)
        {
            $oPeliculasReglasNegocio = new PeliculasReglasNegocio();
            $oPeliculasReglasNegocio->Init($categorias['ID'],$categorias['nombre']);
            array_push($listaCategorias,$oPeliculasReglasNegocio);
        }
        
        return $listaCategorias;
    }

}

