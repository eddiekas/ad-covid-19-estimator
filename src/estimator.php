<?php

//Challenge One

// 'region'

$name = "Africa";
$avgAge = 19.7;
$avgDailyIncomeInUSD = 4;
$avgDailyIncomePopulation = 0.73;
$periodType = "days";
$timeToElapse = 38;
$reportedCases = 2747;
$population = 92931687;
$totalHospitalBeds = 678874;

echo '<pre>';

//Array of the Input data
$regions = array('name' => "Africa", 'avgAge' => 19.7, 'avgDailyIncomeInUSD' => 4, 'avgDailyIncomePopulation' => 0.73);

$regionss = array('region' => $regions, 'periodType' => "days", 'timeToElapse' => 38,'reportedCases' => 2747, 
                  'population' => 92931687, 'totalHospitalBeds' => 678874);

$datas = array('data' => $regionss);
print_r($datas);
echo "<br>";


//Output
$power = (int)($timeToElapse/3);      //to get the power so as to know the rate of infection after 3 days.


//current infection numbers
$firstinfectionsByRequestedTime = $reportedCases * pow(2,$power) ;
echo '<br>';


//Current Infected Persons
function currentlyInfected($x){

        global $reportedCases;
        $currentlyInfected = $reportedCases * $x;
        return $currentlyInfected;
}
$g = currentlyInfected(10);                   //impact currentlyInfected
$h = currentlyInfected(50);                  //Severeimpact currentlyInfected


//infectionsByRequestedTime method
function infectionsByRequestedTime($x){

        global $firstinfectionsByRequestedTime;
        $infectionsByRequestedTime = $firstinfectionsByRequestedTime * $x;
        return $infectionsByRequestedTime;
}
$b = infectionsByRequestedTime(10);           //impact infectionsByRequestedTime
$c = infectionsByRequestedTime(50);           //Severeimpact infectionsByRequestedTime


//display in Arrayform, for the Output data For Challenge 1

$impact = array('currentlyInfected' => $g, 'infectionsByRequestedTime' => $b,);

$severeImpact = array('currentlyInfected' => $h, 'infectionsByRequestedTime' => $c,);



echo '<br>';
$impactEstimate= array('impact'=> $impact);
echo '<br>';

echo '<br>';
$severeEstimate= array('severeImpact'=> $severeImpact);
echo '<br>';

echo '<br>';
$estimate = array('impact'=> $impact, 'severeImpact'=> $severeImpact);
echo '<br>';
$estimates= array('estimate'=> $estimate);
print_r($estimates);
echo '<br>';
?>