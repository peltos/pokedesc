<?php
/** Getting data from a pokemon Array
 * $pkmnAllData[0][0] - First pokemon and pokemon who is the right answer (+ National Dex ID)
 * $pkmnAllData[1][0] - Second pokemon (+ National Dex ID)
 * $pkmnAllData[2][0] - Third pokemon (+ National Dex ID)
 * $pkmnAllData[3][0] - Fourth pokemon (+ National Dex ID)
 * 
 * These are the values that contain in the Arrays ( first numbers is pokemon, second number is attribute)
 * $pkmnAllData[0][0] - National Dex ID - INT
 * $pkmnAllData[0][1] - Pokemon Name - STRING
 * $pkmnAllData[0][2] - Image File - STRING
 * $pkmnAllData[0][3] - Pokemon First Type - STRING
 * $pkmnAllData[0][4] - Pokemon Second Type - STRING
 * $pkmnAllData[0][5] - Pokemon Species - STRING
 * $pkmnAllData[0][6] - Pokemon height - STRING
 * $pkmnAllData[0][7] - Pokemon Weight - STRING
 * $pkmnAllData[0][8] - Pokemon Ability - STRING
 * $pkmnAllData[0][9] - Pokemon Hidden Ability - STRING
 * $pkmnAllData[0][10] - Pokemon Egg Group 1 - STRING
 * $pkmnAllData[0][11] - Pokemon Egg Group 2 - STRING
 */
include 'data/quiz.php';
?>
<div class="loadbar">

</div>
<div class="content--header">
    <div class="content--header__generation">
        <p><?php echo $pkmnGenResult ?></p>
    </div>
    <div class="content--header__description">
        <p><?php echo $pkmnDescResult ?></p>
    </div>
</div> 
<div class="content--main">
    <a class="content--main__item first" href="#" id="<?php echo $pkmnAllData[0][0] ?>">
        <div class="content--main__item__image">
            <img src="img/<?php echo $pkmnAllData[0][2] ?>">
        </div>
        <p><?php echo $pkmnAllData[0][1] ?></p>
    </a>
    <a class="content--main__item" href="#" id="<?php echo $pkmnAllData[1][0] ?>">
        <div class="content--main__item__image">
            <img src="img/<?php echo $pkmnAllData[1][2] ?>">
        </div>
        <p><?php echo $pkmnAllData[1][1] ?></p>
    </a>
    <a class="content--main__item" href="#" id="<?php echo $pkmnAllData[2][0] ?>">
        <div class="content--main__item__image">
            <img src="img/<?php echo $pkmnAllData[2][2] ?>">
        </div>
        <p><?php echo $pkmnAllData[2][1] ?></p>
    </a>
    <a class="content--main__item last" href="#" id="<?php echo $pkmnAllData[3][0] ?>">
        <div class="content--main__item__image">
            <img src="img/<?php echo $pkmnAllData[3][2] ?>">
        </div>
        <p><?php echo $pkmnAllData[3][1] ?></p>
    </a>
</div>
