<?php
include_once "../models/FilmModel.php";
include_once "../library/mainFunctions.php";

function showAction($smarty){
    $id = isset($_GET["film"]) ? $_GET["film"] : null;

    $rsFilmInfo = getFilmInfo($id);

    $config['date'] = '%d.%m.%g';
    $config['time'] = '%H:%M';
    $smarty->assign('config', $config);
    $smarty -> assign("pageTitle", "Фільм");
    $smarty -> assign("rsFilmInfo", $rsFilmInfo);

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "filmShow");
    loadTemplate($smarty, "footer");
}


function addAction($smarty){
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $year = isset($_POST["year"]) ? $_POST["year"] : null;
    $description = isset($_POST["description"]) ? $_POST["description"] : null;
    $descriptionLong = isset($_POST["descriptionLong"]) ? $_POST["descriptionLong"] : null;
    $image = $_FILES["image"] ?? null;
    $genre = isset($_POST["genre"]) ? $_POST["genre"] : null;
    $director = isset($_POST["director"]) ? $_POST["director"] : null;
    $yt_video_id = isset($_POST["yt_video_id"]) ? $_POST["yt_video_id"] : null;


    if($name != null){
        $genreString = implode(", ", $genre);
        addFilm($name, $year, $description, $descriptionLong, $image, $genreString, $director, $yt_video_id);
    }

    $smarty -> assign("pageTitle", "Додавання фільму");

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "filmAdd");
    loadTemplate($smarty, "footer");
}


function filmAddAction($smarty){
    $smarty -> assign("pageTitle", "Додавання фільму");
    loadTemplate($smarty, "header");
    loadTemplate($smarty, "filmAdd");
}