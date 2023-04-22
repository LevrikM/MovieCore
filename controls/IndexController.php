<?php
include_once "../models/IndexModel.php";
include_once "../library/mainFunctions.php";

function indexAction($smarty){
    $rsFilm = getAllFilms();

    $config['date'] = '%d.%m.%g';
    $config['time'] = '%H:%M';
    $smarty->assign('config', $config);
    $smarty->assign("pageTitle", "Головна");
    $smarty->assign("rsFilm", $rsFilm);

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "index");
    loadTemplate($smarty, "footer");
}