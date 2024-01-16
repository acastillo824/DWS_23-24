<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require('../DataAcces/boardDataAccess.php');
class PlayersBusiness
{
    private $_ID;
    private $_NamePlayer;
    private $_Email;
    private $_Passwd;
    private $_ProfileType;
    function __construct(){}
    function init($id, $namePlayer, $email, $passwd, $profileType)
    {
        $this->_ID = $id;
        $this->_NamePlayer = $namePlayer;
        $this->_Email = $email;
        $this->_Passwd = $passwd;
        $this->_ProfileType = $profileType;
    }
    function getId()
    {
        $this->_ID;
    }
    function getNamePlayer()
    {
        $this->_NamePlayer;
    }
    function getEmail()
    {
        $this->_Email;
    }
    function getPasswd()
    {
        $this->_Passwd;
    }
    function getProfileType()
    {
        $this->_ProfileType;
    }
    function insertPlayers($namePlayer, $email, $passwd, $profileType)
    {
        $playersDAL = new BoardDataAccess();
        $playersDAL->insertPlayers($namePlayer, $email, $passwd, $profileType);
    }
    function verifyPlayer($namePlayer, $passwd)
    {
        $playerDAL = new BoardDataAccess();
        $res = $playerDAL->verifyPlayer($namePlayer,$passwd);
        
        return $res;
    }
}
