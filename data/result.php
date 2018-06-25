<?php
session_start();
$pkmnRightAnswerCheck=$_POST["pkmnRightAnswerCheck"];
$pkmnStoredAnswerCheck=$_SESSION["nIdOne"];

if ($pkmnRightAnswerCheck == $pkmnStoredAnswerCheck) {
    if ($_SESSION["genOfPokemon"] == 1){
        $_SESSION["scoreGen1"]++;
    }
    else if($_SESSION["genOfPokemon"] == 2 ){
        $_SESSION["scoreGen2"]++;
    }
    else if($_SESSION["genOfPokemon"] == 3 ){
        $_SESSION["scoreGen3"]++;
    }
    else if($_SESSION["genOfPokemon"] == 4 ){
        $_SESSION["scoreGen4"]++;
    }
    else if($_SESSION["genOfPokemon"] == 5 ){
        $_SESSION["scoreGen5"]++;
    }
    else if($_SESSION["genOfPokemon"] == 6 ){
        $_SESSION["scoreGen6"]++;
    }
    else if($_SESSION["genOfPokemon"] == 7){
        $_SESSION["scoreGen7"]++;
    }
    else{
        alert("error: no points got recorded --'result'-- ");
    }
    echo "yes";
}else{
    echo "no";
}

