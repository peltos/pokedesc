<?php
session_start();
include 'configDB.php';

$pkmnCount = ("SELECT * FROM pokemon ORDER BY nId ASC;");
$pkmnCountResult = $conn->query($pkmnCount);

if ($pkmnCountResult->num_rows > 0) {
    // output data of each row
    while ($pkmn = $pkmnCountResult->fetch_assoc()) {
        echo "<tr class='".$pkmn["name"]."'>";
            echo "<td>".$pkmn["nId"]."</td>";
            echo "<td>".$pkmn["name"]."</td>";
            echo "<td><img src='img/".$pkmn["img"]."'</td>";
            echo "<td>".$pkmn["hp"]."</td>";
            echo "<td>".$pkmn["atk"]."</td>";
            echo "<td>".$pkmn["def"]."</td>";
            echo "<td>".$pkmn["spA"]."</td>";
            echo "<td>".$pkmn["spD"]."</td>";
            echo "<td>".$pkmn["spe"]."</td>";
            echo "<td>".$pkmn["totalStat"]."</td>";
            echo "<td>".$pkmn["type"]."</td>";
            echo "<td>".$pkmn["type2"]."</td>";
            echo "<td>".$pkmn["ability"]."</td>";
            echo "<td>".$pkmn["ability2"]."</td>";
            echo "<td>".$pkmn["hAbility"]."</td>";
            echo "<td>".$pkmn["pkWeight"]."</td>";
            echo "<td>".$pkmn["evWorth"]."</td>";
            echo "<td>".$pkmn["expWorth"]."</td>";
            echo "<td>".$pkmn["pkmnColor"]."</td>";
            echo "<td>".$pkmn["eggHatch"]."</td>";
            echo "<td>".$pkmn["gender"]."</td>";
            echo "<td>".$pkmn["eggGroup1"]."</td>";
            echo "<td>".$pkmn["eggGroup2"]."</td>";
            echo "<td>".$pkmn["catchRate"]."</td>";
            echo "<td>".$pkmn["expTotal"]."</td>";
            echo "<td>".$pkmn["descRB"]."</td>";
            echo "<td>".$pkmn["descYe"]."</td>";
            echo "<td>".$pkmn["descG"]."</td>";
            echo "<td>".$pkmn["descS"]."</td>";
            echo "<td>".$pkmn["descC"]."</td>";
            echo "<td>".$pkmn["descRu"]."</td>";
            echo "<td>".$pkmn["descSh"]."</td>";
            echo "<td>".$pkmn["descFR"]."</td>";
            echo "<td>".$pkmn["descLG"]."</td>";
            echo "<td>".$pkmn["descEm"]."</td>";
            echo "<td>".$pkmn["descD"]."</td>";
            echo "<td>".$pkmn["descPe"]."</td>";
            echo "<td>".$pkmn["descPl"]."</td>";
            echo "<td>".$pkmn["descHG"]."</td>";
            echo "<td>".$pkmn["descSS"]."</td>";
            echo "<td>".$pkmn["descBl"]."</td>";
            echo "<td>".$pkmn["descWh"]."</td>";
            echo "<td>".$pkmn["descBW2"]."</td>";
            echo "<td>".$pkmn["descX"]."</td>";
            echo "<td>".$pkmn["descY"]."</td>";
            echo "<td>".$pkmn["descOR"]."</td>";
            echo "<td>".$pkmn["descAS"]."</td>";
            echo "<td>".$pkmn["descSU"]."</td>";
            echo "<td>".$pkmn["descMO"]."</td>";
        echo "</tr>";
    }
}
$conn->close();
