$(document).ready(function () {
    var pkmnRightAnswer;
    var pkmnCounter;

    var filterGen1;
    var filterGen2;
    var filterGen3;
    var filterGen4;
    var filterGen5;
    var filterGen6;
    var filterGen7;

    //starting the quiz
    $(".intro .start").mouseup(function () {
        filterGen1 = $('input[name="gen1"]').is(':checked');
        filterGen2 = $('input[name="gen2"]').is(':checked');
        filterGen3 = $('input[name="gen3"]').is(':checked');
        filterGen4 = $('input[name="gen4"]').is(':checked');
        filterGen5 = $('input[name="gen5"]').is(':checked');
        filterGen6 = $('input[name="gen6"]').is(':checked');
        filterGen7 = $('input[name="gen7"]').is(':checked');
        if (filterGen1 == false && filterGen2 == false && filterGen3 == false && filterGen4 == false && filterGen5 == false && filterGen6 == false && filterGen7 == false) {
            alert("Check at least one generation box");
            return;
        }

        $(".content-container").css("display", "flex");
        $(".intro").css("display", "none");
        pkmnCounter = 0;
        $(".counter").text("Score: " + pkmnCounter);

        $.ajax({
            url: 'data/filterQuiz.php',
            type: "post",
            data: "filterGen1=" + filterGen1 + "&filterGen2=" + filterGen2
                    + "&filterGen3=" + filterGen3 + "&filterGen4=" + filterGen4
                    + "&filterGen5=" + filterGen5 + "&filterGen6=" + filterGen6
                    + "&filterGen7=" + filterGen7,
            success: function (html) {
            }
        });
        $.ajax({
            url: 'content.php',
            dataType: 'html',
            success: function (html) {
                $(".content-container").html(html);
                $(".loadbar").animate({width: "100%"}, 30000, 'linear', function () {
                    $.ajax({
                        url: 'data/sendingResults.php',
                        type: "post",
                        data: "pkmnCounter=" + pkmnCounter,
                        success: function (html) {
                        }
                    });
                    $(".content-container").empty();
                    $(".content-container").css("display", "none");
                    $(".intro").css("display", "flex");
                    $(".loadbar").stop();
                    $(".loadbar").css("width", "0");
                });
            }
        });
    });

    // choosing an asnwer
    $(document).on("mouseup", ".content--main > a", function () {
        $(".loadbar").stop();
        var pkmnRightAnswerCheck = $(this).attr('id');
        $(".content-container").html("Checking if your answer is correct");
        $.ajax({
            type: "post",
            url: "data/result.php",
            data: "pkmnRightAnswerCheck=" + pkmnRightAnswerCheck,
            success: function (data) {
                pkmnRightAnswer = data;

                //right answer!!!!
                if (pkmnRightAnswer == "yes") {
                    $(".content-container").html("Correct! Loading next question...");
                    ++pkmnCounter;
                    pkmnTime = 30000;
                    $(".counter").text("Score: " + pkmnCounter);
                    $(".loadbar").css("width", "0");

                    $.ajax({
                        url: 'content.php',
                        dataType: 'html',
                        success: function (html) {
                            $(".content-container").html(html);
                            $(".loadbar").animate({width: "100%"}, 30000, 'linear', function () {
                                $.ajax({
                                    url: 'data/sendingResults.php',
                                    type: "post",
                                    data: "pkmnCounter=" + pkmnCounter,
                                    success: function (html) {
                                    }
                                });
                                $(".content-container").empty();
                                $(".content-container").css("display", "none");
                                $(".intro").css("display", "flex");
                                $(".loadbar").css("width", "0");
                            });
                        }
                    });
                }

                //wrong answer....
                else {
                    $.ajax({
                        url: 'data/sendingResults.php',
                        type: "post",
                        data: "pkmnCounter=" + pkmnCounter,
                        success: function (html) {
                        }
                    });
                    $(".content-container").empty();
                    $(".content-container").css("display", "none");
                    $(".intro").css("display", "flex");
                    $(".loadbar").css("width", "0");
                }
            }
        });
    });
});