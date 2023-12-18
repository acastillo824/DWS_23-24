<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require('boardDataAccess.php');
class MatchBusiness
{
    private $_ID;
    private $_Title;
    private $_White;
    private $_Black;
    private $_StartDate;
    private $_EndDate;
    private $_Winner;
    private $_Status;
    function __construct(){}
    function init($id, $title, $white, $black, $startDate, $endDate, $winner, $status)
    {
        $this->_ID = $id;
        $this->_Title = $title;
        $this->_White = $white;
        $this->_Black = $black;
        $this->_StartDate = $startDate;
        $this->_EndDate = $endDate;
        $this->_Winner = $winner;
        $this->_Status = $status;
    }
    function getID(){
        return $this->_ID;
    }
    function getTitle(){
        return $this->_Title;
    }
    function getWhite(){
        return $this->_White;
    }
    function getBlack(){
        return $this->_Black;
    }
    function getStartDate(){
        return $this->_StartDate;
    }
    function getEndDate(){
        return $this->_EndDate;
    }
    function getWinner(){
        return $this->_Winner;
    }
    function getStatus(){
        return $this->_Status;
    }
    function getMatches($orderList)
    {
        $matchesDAL = new BoardDataAccess();
        $rs = $matchesDAL->getMatches($orderList);
		$matchesList =  array();
        foreach ($rs as $matches)
        {
            $oMatchBusiness = new MatchBusiness();
            $oMatchBusiness->Init($matches['ID'],$matches['title'], $matches['white'],$matches['black'],$matches['startDate'],$matches['endDate'],$matches['winner'],$matches['status']);
            array_push($matchesList,$oMatchBusiness);
        }
        
        return $matchesList;
    }
    function separateDate()
    {
        $orderList = 'asc';
        $matchesBL = new MatchBusiness();
        $infoMatch = $matchesBL->getMatches($orderList);
        $startDateList = array();
        $dateList = array();
        foreach ($infoMatch as $match) {
            array_push($startDateList, $match->getStartDate());
        }
        for ($i=0; $i < count($startDateList); $i++) { 
            print($startDateList[$i]."<br>");
        }
    }
}
// Codigo para probar que la funcion funciona XD, valga la redundancia.
$x = new MatchBusiness();
$x->separateDate();