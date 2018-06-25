<?php
session_start();

$pkmnGenFilter1 = $_POST["filterGen1"];
$pkmnGenFilter2 = $_POST["filterGen2"];
$pkmnGenFilter3 = $_POST["filterGen3"];
$pkmnGenFilter4 = $_POST["filterGen4"];
$pkmnGenFilter5 = $_POST["filterGen5"];
$pkmnGenFilter6 = $_POST["filterGen6"];
$pkmnGenFilter7 = $_POST["filterGen7"];

$check = 0;
$query1 = "SELECT * FROM pokemon WHERE";
$minCounter = 0;
$maxCounter = 1;

if ($_POST["filterGen1"] == 'true') {
    if ($minCounter == 0 ){
        $minCounter = 1;
    }
    if ($maxCounter < 151 ){
        $maxCounter = 151;
    }
    $query2 = " nId >= 1 AND nId <= 151";

    $check++;
}
if ($pkmnGenFilter2 == 'true') {
    if ($check >= 1){
        $query3 =  " AND";
    }
    if ($minCounter == 0 ){
        $minCounter = 152;
    }
    if ($maxCounter < 251 ){
        $maxCounter = 251;
    }
    $query4 = " nId >= 152 AND nId <= 251";
    $check++;
}
if ($pkmnGenFilter3 == 'true') {
    if ($check >= 1){
        $query5 =  " AND";
    }
    if ($minCounter == 0 ){
        $minCounter = 252;
    }
    if ($maxCounter < 251 ){
        $maxCounter = 251;
    }
    $query6 =  " nId >= 252 AND nId <= 386";
    $check++;
}
if ($pkmnGenFilter4 == 'true') {
    if ($check >= 1){
        $query7 =  " AND";
    }
    if ($minCounter == 0 ){
        $minCounter = 387;
    }
    if ($maxCounter < 493 ){
        $maxCounter = 493;
    }
    $query8 =  " nId >= 387 AND nId <= 493";
    $check++;
}
if ($pkmnGenFilter5 == 'true') {
    if ($check >= 1){
        $query9 =  " AND";
    }
    if ($minCounter == 0 ){
        $minCounter = 494;
    }
    if ($maxCounter < 649 ){
        $maxCounter = 649;
    }
    $query10 =  " nId >= 494 AND nId <= 649";
    $check++;
}
if ($pkmnGenFilter6 == 'true') {
    if ($check >= 1){
        $query11 =  " AND";
    }
    if ($minCounter == 0 ){
        $minCounter = 650;
    }
    if ($maxCounter < 721 ){
        $maxCounter = 721;
    }
    $query12 = " nId >= 650 AND nId <= 721";
    $check++;
}
if ($pkmnGenFilter7 == 'true') {
    if ($check >= 1){
        $query13 =  " AND";
    }
    if ($minCounter == 0 ){
        $minCounter = 722;
    }
    if ($maxCounter < 802 ){
        $maxCounter = 802;
    }
    $query14 =  " nId >= 722 AND nId <= 802";
    $check++;
}
$query = $query1 . $query2 . $query3 . $query4 . $query5 . $query6 . $query7 . $query8 . $query9 . $query10 . $query11 . $query12 . $query13 . $query14;
$_SESSION["FilterQuery"] = $query;
$_SESSION["FilterMinCounter"] = $minCounter;
$_SESSION["FilterMaxCounter"] = $maxCounter;