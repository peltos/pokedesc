<?php
session_start();
include 'configDB.php';

$pkmnMin = $_SESSION["FilterMinCounter"];
$pkmnMax = $_SESSION["FilterMaxCounter"];

$pkmnOneNumber = rand($pkmnMin,$pkmnMax);
do {
  $pkmnTwoNumber = rand($pkmnMin,$pkmnMax);
} while ($pkmnOneNumber == $pkmnTwoNumber);
do {
  $pkmnThreeNumber = rand($pkmnMin,$pkmnMax);
} while ($pkmnThreeNumber == $pkmnOneNumber || $pkmnThreeNumber == $pkmnTwoNumber);
do {
  $pkmnFourNumber = rand($pkmnMin,$pkmnMax);
} while ($pkmnFourNumber == $pkmnOneNumber || $pkmnFourNumber == $pkmnTwoNumber || $pkmnFourNumber == $pkmnThreeNumber);

$pkmnOne = ("SELECT * FROM pokemon WHERE nId = ".$pkmnOneNumber.";");
$pkmnOneResult = $conn->query($pkmnOne);
$pkmnTwo = ("SELECT * FROM pokemon WHERE nId = ".$pkmnTwoNumber.";");
$pkmnTwoResult = $conn->query($pkmnTwo);
$pkmnThree = ("SELECT * FROM pokemon WHERE nId = ".$pkmnThreeNumber.";");
$pkmnThreeResult = $conn->query($pkmnThree);
$pkmnFour = ("SELECT * FROM pokemon WHERE nId = ".$pkmnFourNumber.";");
$pkmnFourResult = $conn->query($pkmnFour);

$pkmnGen = array("descRB", "descYe", "descG","descS","descC","descRu","descSh","descFR","descLG","descEm","descD","descPe","descPl","descHG","descSS","descBl","descWh","descBW2","descX","descY","descOR","descAS","descSU","descMO");

if ($pkmnOneResult->num_rows > 0) {
    // output data of each row
    
    $pkmnOneData = array();
    while ($pkmnOne = $pkmnOneResult->fetch_assoc()) {
        do{
            shuffle($pkmnGen);
        }while($pkmnOne[$pkmnGen[0]] == null || $pkmnOne[$pkmnGen[0]] == "");
        
        if ($pkmnGen[0] == "descRB") {$pkmnGenResult = "Red And Blue";}
        else if ($pkmnGen[0] == "descYe") {$pkmnGenResult = "Yellow";}
        else if ($pkmnGen[0] == "descG") {$pkmnGenResult = "Gold";}
        else if ($pkmnGen[0] == "descS") {$pkmnGenResult = "Silver";}
        else if ($pkmnGen[0] == "descC") {$pkmnGenResult = "Crystal";}
        else if ($pkmnGen[0] == "descRu") {$pkmnGenResult = "Ruby";}
        else if ($pkmnGen[0] == "descSh") {$pkmnGenResult = "Sapphire";}
        else if ($pkmnGen[0] == "descFR") {$pkmnGenResult = "Fire Red";}
        else if ($pkmnGen[0] == "descLG") {$pkmnGenResult = "Leaf green";}
        else if ($pkmnGen[0] == "descEm") {$pkmnGenResult = "Emerald";}
        else if ($pkmnGen[0] == "descD") {$pkmnGenResult = "Diamond";}
        else if ($pkmnGen[0] == "descPe") {$pkmnGenResult = "Pearl";}
        else if ($pkmnGen[0] == "descPl") {$pkmnGenResult = "Platinum";}
        else if ($pkmnGen[0] == "descHG") {$pkmnGenResult = "Heart Gold";}
        else if ($pkmnGen[0] == "descSS") {$pkmnGenResult = "Soul Silver";}
        else if ($pkmnGen[0] == "descBl") {$pkmnGenResult = "Black";}
        else if ($pkmnGen[0] == "descWh") {$pkmnGenResult = "White";}
        else if ($pkmnGen[0] == "descBW2") {$pkmnGenResult = "Black 2 And White 2";}
        else if ($pkmnGen[0] == "descX") {$pkmnGenResult = "X";}
        else if ($pkmnGen[0] == "descY") {$pkmnGenResult = "Y";}
        else if ($pkmnGen[0] == "descOR") {$pkmnGenResult = "Omega Ruby";}
        else if ($pkmnGen[0] == "descAS") {$pkmnGenResult = "Alpha Sapphire";}
        else if ($pkmnGen[0] == "descSU") {$pkmnGenResult = "Sun";}
        else if ($pkmnGen[0] == "descMO") {$pkmnGenResult = "Moon";}
        
        $_SESSION["nIdOne"] = $pkmnOne["nId"];
        $pkmnOneData[] = $pkmnOne["nId"];
        $pkmnOneData[] = $pkmnOne["name"];
        $pkmnOneData[] = $pkmnOne["img"];
        $pkmnOneData[] = $pkmnOne["type"];
        $pkmnOneData[] = $pkmnOne["type2"];
        $pkmnOneData[] = $pkmnOne["species"];
        $pkmnOneData[] = $pkmnOne["pkHeight"];
        $pkmnOneData[] = $pkmnOne["pkWeight"];
        $pkmnOneData[] = $pkmnOne["ability"];
        $pkmnOneData[] = $pkmnOne["hAbility"];
        $pkmnOneData[] = $pkmnOne["eggGroup1"];
        $pkmnOneData[] = $pkmnOne["eggGroup2"];
        
        if ($pkmnOne["nId"] <= 151){
            $_SESSION["genOfPokemon"] = 1;
        }
        else if($pkmnOne["nId"] > 151 ||$pkmnOne["nId"] <= 251 ){
            $_SESSION["genOfPokemon"] = 2;
        }
        else if($pkmnOne["nId"] > 252 ||$pkmnOne["nId"] <= 386 ){
            $_SESSION["genOfPokemon"] = 3;
        }
        else if($pkmnOne["nId"] > 387 ||$pkmnOne["nId"] <= 493 ){
            $_SESSION["genOfPokemon"] = 4;
        }
        else if($pkmnOne["nId"] > 494 ||$pkmnOne["nId"] <= 649 ){
            $_SESSION["genOfPokemon"] = 5;
        }
        else if($pkmnOne["nId"] > 650 ||$pkmnOne["nId"] <= 721 ){
            $_SESSION["genOfPokemon"] = 6;
        }
        else if($pkmnOne["nId"] > 722 ||$pkmnOne["nId"] <= 802 ){
            $_SESSION["genOfPokemon"] = 7;
        }
        else{
            $_SESSION["genOfPokemon"] = 0;
        }
        
        $pkmnDescRaw = $pkmnOne[$pkmnGen[0]];
        $pkmnDescResult = str_ireplace($pkmnOne["name"],"<i class='censored'>???</i>",$pkmnDescRaw);
        
    }
    $pkmnTwoData = array();
    while ($pkmnTwo = $pkmnTwoResult->fetch_assoc()) {
        $pkmnTwoData[] = $pkmnTwo["nId"];
        $pkmnTwoData[] = $pkmnTwo["name"];
        $pkmnTwoData[] = $pkmnTwo["img"];
        $pkmnTwoData[] = $pkmnTwo["type"];
        $pkmnTwoData[] = $pkmnTwo["type2"];
        $pkmnTwoData[] = $pkmnTwo["species"];
        $pkmnTwoData[] = $pkmnTwo["pkHeight"];
        $pkmnTwoData[] = $pkmnTwo["pkWeight"];
        $pkmnTwoData[] = $pkmnTwo["ability"];
        $pkmnTwoData[] = $pkmnTwo["hAbility"];
        $pkmnTwoData[] = $pkmnTwo["eggGroup1"];
        $pkmnTwoData[] = $pkmnTwo["eggGroup2"];
    }
    $pkmnThreeData = array();
    while ($pkmnThree = $pkmnThreeResult->fetch_assoc()) {
        $pkmnThreeData[] = $pkmnThree["nId"];
        $pkmnThreeData[] = $pkmnThree["name"];
        $pkmnThreeData[] = $pkmnThree["img"];
        $pkmnThreeData[] = $pkmnThree["type"];
        $pkmnThreeData[] = $pkmnThree["type2"];
        $pkmnThreeData[] = $pkmnThree["species"];
        $pkmnThreeData[] = $pkmnThree["pkHeight"];
        $pkmnThreeData[] = $pkmnThree["pkWeight"];
        $pkmnThreeData[] = $pkmnThree["ability"];
        $pkmnThreeData[] = $pkmnThree["hAbility"];
        $pkmnThreeData[] = $pkmnThree["eggGroup1"];
        $pkmnThreeData[] = $pkmnThree["eggGroup2"];
    }
    $pkmnFourData = array();
    while ($pkmnFour = $pkmnFourResult->fetch_assoc()) {
        $pkmnFourData[] = $pkmnFour["nId"];
        $pkmnFourData[] = $pkmnFour["name"];
        $pkmnFourData[] = $pkmnFour["img"];
        $pkmnFourData[] = $pkmnFour["type"];
        $pkmnFourData[] = $pkmnFour["type2"];
        $pkmnFourData[] = $pkmnFour["species"];
        $pkmnFourData[] = $pkmnFour["pkHeight"];
        $pkmnFourData[] = $pkmnFour["pkWeight"];
        $pkmnFourData[] = $pkmnFour["ability"];
        $pkmnFourData[] = $pkmnFour["hAbility"];
        $pkmnFourData[] = $pkmnFour["eggGroup1"];
        $pkmnFourData[] = $pkmnFour["eggGroup2"];
    }
    $pkmnAllData = array($pkmnOneData,$pkmnTwoData,$pkmnThreeData,$pkmnFourData);
    shuffle($pkmnAllData);
}
$conn->close();
