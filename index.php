<?php
/**
 * @author peltos
 */
session_start();
$_SESSION["scoreGen1"] = 0;
$_SESSION["scoreGen2"] = 0;
$_SESSION["scoreGen3"] = 0;
$_SESSION["scoreGen4"] = 0;
$_SESSION["scoreGen5"] = 0;
$_SESSION["scoreGen6"] = 0;
$_SESSION["scoreGen7"] = 0;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pokemon Description Quiz</title>
        <link rel="stylesheet" href="style/normalize.css">
        <link rel="stylesheet" href="style/style.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script>
            $.getScript('js/social.js', function () {});
        </script>

        <!-- START Tags for facebook -->
        <meta property="og:url"                content="http://pokedesc.eu" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="Pokemon Description Quiz!" />
        <meta property="og:description"        content="Think you can be the best? Do the quiz to find out!" />
        <meta property="og:image"              content="--image-path--" />
        <!-- END Tags for facebook -->
        
         <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="asdas">
        <?php include_once("data/analyticstracking.php") ?>
        <header class="main-header">
            <img class="main-header--image" src="img/logo.svg">
            <div class="main-header--shape">
            </div>
        </header>

        <div class="intro">
            <a href="#" class="start">Start</a>

            <p> Choose which generations will show up!</p>
            <form action="">
                <input class="filterGen1" type="checkbox" name="gen1" value="gen1" checked>Generation 1<br>
                <input class="filterGen2" type="checkbox" name="gen2" value="gen2" checked>Generation 2<br>
                <input class="filterGen3" type="checkbox" name="gen3" value="gen3" checked>Generation 3<br>
    <!--            <input class="filterGen4" type="checkbox" name="gen4" value="gen4" disabled>Generation 4<br>
                <input class="filterGen5" type="checkbox" name="gen5" value="gen5" disabled>Generation 5<br>
                <input class="filterGen6" type="checkbox" name="gen6" value="gen6" disabled>Generation 6<br>
                <input class="filterGen7" type="checkbox" name="gen7" value="gen7" disabled>Generation 7<br>-->

            </form>
            <i>Later generations will be added in the future.</i>

            <div class="share">
                <a target="_blank" class="twitter-share-button" href="https://pokedesc.eu?text=Think%20you%20can%20be%20the%20best%3F%20Do%20the%20quiz%20to%20find%20out!%20%23pokedesc" data-size="large"> </a>
            </div>
        </div>
        <div class="main-container">
            <div class="counter"></div>
            <div class="content-container"></div>
        </div>
        
        <script src="js/quiz.js"></script>
    </body>
</html>