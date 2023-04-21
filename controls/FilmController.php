<?php
include_once "../models/FilmModel.php";
include_once "../library/mainFunctions.php";

//Цей PHP-код виконує декілька дій, пов'язаних з відображенням та додаванням фільмів.
// Він включає дві функції - showAction і addAction - та ще одну функцію filmAddAction,
// яка просто відображає сторінку додавання фільму.


//Функція showAction викликає функцію getFilmInfo, щоб отримати інформацію про фільм,
// передану в параметрах запиту. Ця інформація потім передається в шаблон Smarty для відображення на сторінці фільму.
// Крім того, функція встановлює форматування дати та часу для шаблону та відображає заголовок сторінки.
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


//Функція addAction перевіряє, чи були надіслані дані форми додавання фільму, та якщо так,
// то додає новий фільм за допомогою функції addFilm.
// Крім того, вона відображає сторінку додавання фільму з встановленим заголовком сторінки.
function addAction($smarty){
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $year = isset($_POST["year"]) ? $_POST["year"] : null;
    $description = isset($_POST["description"]) ? $_POST["description"] : null;
    $descriptionLong = isset($_POST["descriptionLong"]) ? $_POST["descriptionLong"] : null;
    $image = isset($_POST["image"]) ? $_POST["image"] : null;
    $genre = isset($_POST["genre"]) ? $_POST["genre"] : null;
    $director = isset($_POST["director"]) ? $_POST["director"] : null;



    if($name != null){
        foreach ($genre as $value) {
            $value = trim($value, "[NS,L]");
        }

        $genreString = implode(", ", $genre);
        addFilm($name, $year, $description, $descriptionLong, $image, $genreString, $director);
    }

    $smarty -> assign("pageTitle", "Додавання фільму");
/*    $smarty -> assign("rsFilmInfo", $rsFilmInfo);*/

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "filmAdd");
    loadTemplate($smarty, "footer");
}


//Функція filmAddAction просто відображає сторінку додавання фільму з встановленим заголовком сторінки.
function filmAddAction($smarty){
    $smarty -> assign("pageTitle", "Додавання фільму");
    loadTemplate($smarty, "header");
    loadTemplate($smarty, "filmAdd");
}
//У цьому коді використовується шаблонізатор Smarty для відображення сторінок,
// тому перед викликом функцій showAction та addAction, виконується завантаження шаблонів header,
// filmShow та footer для сторінки фільму, а header, filmAdd та footer для сторінки додавання фільму.