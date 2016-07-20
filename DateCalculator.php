<?php 


// Date Calculator: provides handy DateCaluclation Functions, and Date Parsing Functionalities 
class DateCalculator
{
 


  public function __construct()
  {
      
  }
  

 	public function addDaysToDate($date,$days)
	{
    	$date = strtotime("+".$days." days", strtotime($date));
    	return  date("Y-m-d", $date);
	}


	public function removeDaysFromDate($date,$days)
	{
    	$date = strtotime("-".$days." days", strtotime($date));
    	return  date("Y-m-d", $date);
	}
  
	
	public function getDayofDate($date) 
	{
		
		// Format: 2016-06-02
		$splitted = explode('-',$date); 
		$day = $splitted[2]; 
		
		return (int)($day); 
	}
  


  

 
}


$datecalculator = new  DateCalculator(); 


?>