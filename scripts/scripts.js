/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint


/* General jQuery wrapper */
$(document).ready(function () {

    /* Hides FAQ answers */
    $("dd").hide();


    /* Reveals answers upon clicking the questions */
    $("dt").on("click", function () {

        $(this).toggleClass("open").next().slideToggle();

    });

    /* As long as the arrows are hidden, removes styles for click events and shows answers */
    if ($("dt:before").css("border") === "none") {
        $("dd").show();
        $("dt").on("click", function () {
            $(this).removeClass("open");
        });
    }

});
