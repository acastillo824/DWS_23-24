<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require('../DataAcces/boardDataAccess.php');
class PlayersBusiness
{
    private $_ID;
    private $_Name;
    private $_Email;
    private $_Passwd;
    private $_ProfileType;
    function __construct(){}
    function init($id, $name, $email, $passwd, $profileType)
    {
        $this->_ID = $id;
        $this->_Name = $name;
        $this->_Email = $email;
        $this->_Passwd = $passwd;
        $this->_ProfileType = $profileType;
    }
    function getId()
    {
        $this->_ID;
    }
    function getName()
    {
        $this->_Name;
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
    function insertPlayer($name, $email, $passwd, $profileType)
    {
        $playersDAL = new BoardDataAccess();
        $playersDAL->insertPlayers($name, $email, $passwd, $profileType);
    }
    function verifyPlayer($name, $passwd, $profileType)
    {
        $playerDAL = new BoardDataAccess();
        $res = $playerDAL->verifyPlayer($name,$passwd, $profileType);
        
        return $res;
    }
}
