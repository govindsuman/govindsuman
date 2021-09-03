<?php 

    /*$p = 10000; 
    $r = 10; 
    $t = 2; 

// one month interest 
    $r = $r / (12 * 100); 
      
    // one month period 
    $t = $t * 12;  
      
    $emi = ($p * $r * pow(1 + $r, $t)) / (pow(1 + $r, $t) - 1); 

	

$amount = 10000;
$rate = .12 / 12; // Monthly interest rate
$term = 3; // Term in months

$emi = $amount * $rate * (pow(1 + $rate, $term) / (pow(1 + $rate, $term) - 1));



*/


date_default_timezone_set('asia/ho_chi_minh');
$format = 'd-m-Y'; 

echo  $today = date($format); echo "<br>";

for ($i=1; $i <= 80 ; $i++  ) {
	echo $next_month = date($format, strtotime("$today + 3 month")); echo "<br>";

	$today =$next_month;


}




   /* // Start date
    $date = '2009-11-06';
    // End date
    $end_date = '2010-11-31';

    while (strtotime($date) <= strtotime($end_date)) {
        echo  date("M Y", strtotime($date)) . "<br/>";
       
        $date = date ("Y-m-d", strtotime("+1 month", strtotime($date)));
    }
    date("M Y", strtotime($date));*/
    ?>
