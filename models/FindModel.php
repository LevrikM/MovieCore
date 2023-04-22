<?php

function getFilmsByName($findFilm)
{
    $sql = "SELECT * FROM films WHERE name LIKE '%$findFilm%'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}

function getFilmsByGenre($findFilm){
    $sql = "SELECT * FROM films WHERE genre LIKE '%$findFilm%'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}