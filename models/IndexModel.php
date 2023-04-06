<?php

function getAllFilms(){
    $sql = "SELECT * FROM films";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}