<?php

function getFilmInfo($id){
    $sql = "SELECT * FROM films where id = '$id'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}


function addFilm($name, $year, $description, $descriptionLong, $image, $genre, $director){
    $sql = "INSERT INTO films (name, year, description, descriptionLong, image, genre, director, status) VALUES ('$name', '$year', '$description', '$descriptionLong', '$image', '$genre', '$director', 1)";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
}