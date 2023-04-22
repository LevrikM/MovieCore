<?php
include_once "../models/FindModel.php";
include_once "../library/mainFunctions.php";

function nameAction($smarty){
    $findFilm = isset($_GET["nameFind"]) ? $_GET["nameFind"] : null;
    $trimmed = trim($findFilm, "[NS,L]");
    $rsFilm = getFilmsByName($trimmed);


    $smarty -> assign("pageTitle", "Головна");
    $smarty -> assign("rsFilm", $rsFilm);

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "index");
    loadTemplate($smarty, "footer");
}


function genreAction($smarty){
    $findFilm = isset($_GET["name"]) ? $_GET["name"] : null;
    $trimmed = trim($findFilm, "[NS,L]");

    $rsFilm = getFilmsByGenre($trimmed);

    $smarty->assign("pageTitle", "Головна");
    $smarty->assign("rsFilm", $rsFilm);

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "index");
    loadTemplate($smarty, "footer");
}