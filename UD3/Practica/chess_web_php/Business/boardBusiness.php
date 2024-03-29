<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require("../DataAcces/boardDataAccess.php");
class BoardBusiness
{
    private $_ID;
    private $_Name;
    private $_Email;
    private $_Password;

    function __construct(){}
    function init($id, $name, $email, $passwd)
    {
        $this->_ID = $id;
        $this->_Name = $name;
        $this->_Email = $email;
        $this->_Password = $passwd;
    }
    function getID()
    {
        return $this->_ID;
    }
    function getName()
    {
        return $this->_Name;
    }
    function getEmail()
    {
        return $this->_Email;
    }
    function getPassword()
    {
        return $this->_Password;
    }
    function getPlayers()
    {
        $playersDAL = new BoardDataAccess();
        $rs = $playersDAL->getPlayers();
		$playersList =  array();
        foreach ($rs as $players)
        {
            $oBoardBusiness = new BoardBusiness();
            $oBoardBusiness->Init($players['ID'], $players['namePlayer'],$players['email'],$players['passwd']);
            array_push($playersList,$oBoardBusiness);
        }
        
        return $playersList;
    }
    function insertMatch($idPLWH, $idPLBL,$matchName)
    {
        $playersDAL = new BoardDataAccess();
        $playersDAL->insertMatch($idPLWH, $idPLBL, $matchName);
    }
}