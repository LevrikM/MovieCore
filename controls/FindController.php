<?php
include_once "../models/FindModel.php";
include_once "../library/mainFunctions.php";

//Функція nameAction приймає змінну $smarty та зчитує значення змінної $_GET["nameFind"],
// якщо вона існує, тоді відбувається виклик функції getFilmsByName з параметром
// $trimmed (рядок без пробілів та символів "[NS,L]"), результат запиту зберігається в змінну $rsFilm.
// Після цього змінні $pageTitle та $rsFilm передаються в шаблон, викликаються функції
// loadTemplate для відображення заголовку, вмісту сторінки та підвалу.
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


//Функція genreAction працює за аналогічним принципом, але зчитує значення змінної $_GET["name"]
// та викликає функцію getFilmsByGenre з параметром $trimmed. Результат також передається в шаблон
// та викликаються функції loadTemplate для відображення заголовку, вмісту сторінки та підвалу.
function genreAction($smarty){
    /*    $findFilm = isset($_POST["nameFind"]) ? $_POST["nameFind"] : null;*/

    $findFilm = isset($_GET["name"]) ? $_GET["name"] : null;
    $trimmed = trim($findFilm, "[NS,L]");
    $rsFilm = getFilmsByGenre($trimmed);


    $smarty -> assign("pageTitle", "Головна");
    $smarty -> assign("rsFilm", $rsFilm);

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "index");
    loadTemplate($smarty, "footer");
}

//У коді використовується бібліотека mainFunctions.php, яка, ймовірно, містить додаткові функції
// для відображення шаблонів та взаємодії з базою даних. Також імпортується модель FindModel.php,
// що ймовірно містить функції для пошуку фільмів.