<?php
include_once "../models/IndexModel.php";
include_once "../library/mainFunctions.php";

function indexAction($smarty){
    $rsFilm = getAllFilms();

    $config['date'] = '%d.%m.%g';
    $config['time'] = '%H:%M';
    $smarty->assign('config', $config);
    $smarty -> assign("pageTitle", "Головна");
    $smarty -> assign("rsFilm", $rsFilm);

    loadTemplate($smarty, "header");
    loadTemplate($smarty, "index");
    loadTemplate($smarty, "footer");
}
//Цей код містить функцію indexAction, яка виконує наступні дії:
//
//отримує всі фільми за допомогою функції getAllFilms з моделі IndexModel;
//встановлює налаштування для форматування дати і часу в масиві $config;
//присвоює ці значення змінній $smarty;
//встановлює заголовок сторінки в змінну $smarty;
//присвоює змінну $rsFilm, що містить масив з усіма фільмами, змінній $smarty;
//викликає функцію loadTemplate, щоб показати шаблони header, index та footer змінної $smarty.
//
//Загалом, цей код відповідає за відображення домашньої сторінки сайту зі списком всіх фільмів.