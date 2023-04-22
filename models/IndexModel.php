<?php

function getAllFilms()
{
    $sql = "SELECT * FROM films";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}

function getGenres()
{
    $genres = [
        "Фентезі",
        "Пригоди",
        "Сімейний",
        "Фантастика",
        "Драми",
        "Спортивні",
        "Комедія",
        "Бойовик",
        "Жахи",
        "Кримінал",
        "Дитячі",
        "Аніме",
        "Інше"
    ];
    return $genres;
}