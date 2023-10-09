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
	
	
	public function getYearofDate($date) 
	{
		
		// Format: 2016-06-02
		$splitted = explode('-',$date); 
		$year = $splitted[0]; 
		
		return (int)($year); 
	}
	
	
  
  
  	public function getDifferenceInDays($date1,$date2) 
	{
			// Calc difference in Days (Requiring PHP > 5.3) 
			$date1 = new DateTime($date1);
			$date2 = new DateTime($date2);

			
			if( $date2 > $date1) $diff = $date2->diff($date1)->format("%a");
			else  $diff = -1*$date1->diff($date2)->format("%a");
			
		 // RETURN DIFFERENCE IN DAYS
		 return $diff;		
	}

	
	
	public function toEuropeanDate($date) 
	{
		$splitted = explode('-',$date); 
		
		$y = $splitted[0]; 
		$m = $splitted[1]; 
		$d = $splitted[2]; 
		
		return $d.'.'.$m.'.'.$y; 	
	}




	public function timeDifferenceMinutes($date1, $time1, $date2, $time2)
	{

		$d1 = strtotime($date1." ".$time1);
		$d2 = strtotime($date2." ".$time2);
	
		$totalSecondsDiff = abs($d1-$d2); 
		$totalMinutesDiff = $totalSecondsDiff/60; 
		
		 // RETURN DIFFERENCE IN DAYS
	 	return $totalMinutesDiff;		

	}


	public function addMinutesToDateTime($date,$time,$minutes)
	{

		$time = new DateTime($date.' '.$time);
		$time->add(new DateInterval('PT' . $minutes . 'M'));

		return $time->format('Y-m-d H:i');

	}


	public function removeMinutesToDateTime($date,$time,$minutes)
	{

		$time = new DateTime($date.' '.$time);
		$time->remove(new DateInterval('PT' . $minutes . 'M'));

		return $time->format('Y-m-d H:i');

	}





	public function addMinutesToTime($time,$minutes)
	{

		$date = date('Y-m-d'); 
		$time = new DateTime($date.' '.$time);
		$time->add(new DateInterval('PT' . $minutes . 'M'));

		return $time->format('H:i');

	}



 
}


$datecalculator = new  DateCalculator(); 


?>
