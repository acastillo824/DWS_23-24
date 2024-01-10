<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
class PlayersBusiness
{
    private $_ID;
    private $_Name;
    private $_Email;
    private $_Passwd;
    private $_Perfil;
    function __construct(){}
    function init($id, $name, $email, $passwd, $perfil)
    {
        $this->_ID = $id;
        $this->_Name = $name;
        $this->_Email = $email;
        $this->_Passwd = $passwd;
        $this->_Perfil = $perfil;
    }
}