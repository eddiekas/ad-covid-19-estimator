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
$year = 365;
$month= 30;
$week = 7;


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
$pyear = (int)($year/3);
$pmonths = (int)($month/3);
$pweek = (int)($week/3);

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
$data= array('estimate'=> $estimate);


function covid19ImpactEstimator($data){
    print_r($data);

    return $data;
}
covid19ImpactEstimator($data);





//current infection numbers, for a year
$firstinfectionsByRequestedTime = $reportedCases * pow(2,$pyear) ;
echo '<br>';


//Current Infected Persons
function currentlyInfecteds($x){

        global $reportedCases;
        $currentlyInfected = $reportedCases * $x;
        return $currentlyInfected;
}
$g = currentlyInfecteds(10);                   //impact currentlyInfected
$h = currentlyInfecteds(50);                  //Severeimpact currentlyInfected


//infectionsByRequestedTime method
function infectionsByRequestedTimes($x){

        global $firstinfectionsByRequestedTime;
        $infectionsByRequestedTime = $firstinfectionsByRequestedTime * $x;
        return $infectionsByRequestedTime;
}
$b = infectionsByRequestedTimes(10);           //impact infectionsByRequestedTime
$c = infectionsByRequestedTimes(50);           //Severeimpact infectionsByRequestedTime


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
$data= array('estimate'=> $estimate);

function covid19ImpactEstimators($data){
    print_r($data);

    return $data;
}
covid19ImpactEstimators($data);



//current infection numbers, for a month
$firstinfectionsByRequestedTime = $reportedCases * pow(2,$pmonths) ;
echo '<br>';


//Current Infected Persons
function currentlyInfectedss($x){

        global $reportedCases;
        $currentlyInfected = $reportedCases * $x;
        return $currentlyInfected;
}
$g = currentlyInfectedss(10);                   //impact currentlyInfected
$h = currentlyInfectedss(50);                  //Severeimpact currentlyInfected


//infectionsByRequestedTime method
function infectionsByRequestedTimess($x){

        global $firstinfectionsByRequestedTime;
        $infectionsByRequestedTime = $firstinfectionsByRequestedTime * $x;
        return $infectionsByRequestedTime;
}
$b = infectionsByRequestedTimess(10);           //impact infectionsByRequestedTime
$c = infectionsByRequestedTimess(50);           //Severeimpact infectionsByRequestedTime


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
$data= array('estimate'=> $estimate);


function covid19ImpactEstimatorss($data){
    print_r($data);

    return $data;
}
covid19ImpactEstimatorss($data);


//current infection numbers, for a week
$firstinfectionsByRequestedTime = $reportedCases * pow(2,$pweek) ;
echo '<br>';


//Current Infected Persons
function currentlyInfectedsss($x){

        global $reportedCases;
        $currentlyInfected = $reportedCases * $x;
        return $currentlyInfected;
}
$g = currentlyInfectedsss(10);                   //impact currentlyInfected
$h = currentlyInfectedsss(50);                  //Severeimpact currentlyInfected


//infectionsByRequestedTime method
function infectionsByRequestedTimesss($x){

        global $firstinfectionsByRequestedTime;
        $infectionsByRequestedTime = $firstinfectionsByRequestedTime * $x;
        return $infectionsByRequestedTime;
}
$b = infectionsByRequestedTimesss(10);           //impact infectionsByRequestedTime
$c = infectionsByRequestedTimesss(50);           //Severeimpact infectionsByRequestedTime


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
$data= array('estimate'=> $estimate);


function covid19ImpactEstimatorsss($data){
    print_r($data);

    return $data;
}
covid19ImpactEstimatorsss($data);


?>
