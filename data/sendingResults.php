<?php
session_start();
include 'configDB.php';


$ip; //ip of client gets stored
$pkmnCounter=$_POST["pkmnCounter"]; //totalscore gets stored
$checkedAdres; //amount of games played gets stored

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
{
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
{
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
  $ip=$_SERVER['REMOTE_ADDR'];
}

$resultScore = ("INSERT INTO quizScore ( ipAdres, totalScore, gen1Score, gen2Score, gen3Score, gen4Score, gen5Score, gen6Score, gen7Score) "
        . "VALUES ('".$ip."', ".$pkmnCounter." ,".$_SESSION["scoreGen1"].", ".$_SESSION["scoreGen2"].", ".$_SESSION["scoreGen3"].", ".$_SESSION["scoreGen4"].", ".$_SESSION["scoreGen5"].", ".$_SESSION["scoreGen6"].", ".$_SESSION["scoreGen7"].");");

$resultScoreResult = $conn->query($resultScore);

$conn->close();