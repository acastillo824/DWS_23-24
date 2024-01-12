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
    private $_Premium;
    function __construct(){}
    function init($id, $name, $email, $passwd, $premium)
    {
        $this->_ID = $id;
        $this->_Name = $name;
        $this->_Email = $email;
        $this->_Passwd = $passwd;
        $this->_User = $premium;
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
    function getPremium()
    {
        $this->_Premium;
    }
    function insertPlayer($name, $email, $passwd, $premium)
    {
        $playersDAL = new BoardDataAccess();
        $playersDAL->insertPlayers($name, $email, $passwd, $premium);
    }
    function verifyPlayer($name, $passwd, $premium)
    {
        $playerDAL = new BoardDataAccess();
        $res = $playerDAL->verifyPlayer($name,$passwd, $premium);
        
        return $res;
    }
}
