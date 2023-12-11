<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);
require('boardDataAccess.php');
class MatchBusiness
{
    private $_ID;
    private $_White;
    private $_Black;
    private $_StartDate;
    private $_EndDate;
    private $_Winner;
    private $_Status;
    function __construct(){}
    function init($id, $white, $black, $startDate, $endDate, $winner, $status)
    {
        $this->_ID = $id;
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
    function getMatches()
    {
        $matchesDAL = new BoardDataAccess();
        $rs = $matchesDAL->getMatches();
		$matchesList =  array();
        foreach ($rs as $matches)
        {
            $oMatchBusiness = new MatchBusiness();
            $oMatchBusiness->Init($matches['ID'],$matches['white'],$matches['black'],$matches['startDate'],$matches['endDate'],$matches['winner'],$matches['status']);
            array_push($matchesList,$oMatchBusiness);
        }
        
        return $matchesList;
    }
    function orderMatches()
    {
        $matchesDAL = new BoardDataAccess();
        $rs = $matchesDAL->orderMatches();
		$matchesList =  array();
        foreach ($rs as $matches)
        {
            $oMatchBusiness = new MatchBusiness();
            $oMatchBusiness->Init($matches['ID'],$matches['white'],$matches['black'],$matches['startDate'],$matches['endDate'],$matches['winner'],$matches['status']);
            array_push($matchesList,$oMatchBusiness);
        }
        
        return $matchesList;
    }
}