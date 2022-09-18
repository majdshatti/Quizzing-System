<?php

use Illuminate\Support\Facades\Route;

//*********************************/
//******* LANGUAGE WRAPPER ********/
//*********************************/

Route::group(
    ["prefix" => "{lang}", "middleware" => "LanguageManager"],

    //*********************************/
    //************ ROUTES *************/
    //*********************************/
    function () {
        require_once "auth.php";
        require_once "user.php";
        require_once "subject.php";
        require_once "question.php";
    }
);

//*********************************/
//******** 404 Not Found **********/
//*********************************/

Route::fallback(function () {
    return response()->json(
        [
            "message" => "Page Not Found. Got lost? contact info@company.com",
        ],
        404
    );
});
