<?php

function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}
?>

<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    
	/*Function to format Date*/
	function format_date($f_date,$format=NULL){
		$today = date('Y-m-d');
		$tomorrow = date("Y-m-d", strtotime('tomorrow'));
		$yesterday = date("Y-m-d", strtotime('yesterday'));
		$fixyear = date('Y',strtotime($f_date));
		if($f_date == $today){$return = 'Today';}
		elseif($f_date == $yesterday){$return = 'Yesterday';}
		elseif($f_date == $tomorrow){$return = 'Tomorrow';}
		else{
			if($format == NULL){
				if(date('Y') == $fixyear){$return = date('M jS (D)',strtotime($f_date));}
				else{$return = date('M jS Y',strtotime($f_date));}
			}else{
				$return = date($format,strtotime($f_date));
			}
		}
		return $return;
	}
	
	
?>