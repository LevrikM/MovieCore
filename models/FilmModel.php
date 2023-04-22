<?php

function getFilmInfo($id){
    $sql = "SELECT * FROM films where id = '$id'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}

function addFilm($name, $year, $description, $descriptionLong, $image, $genre, $director, $yt_video_id){
    $fileName = uploadFile("images/films", $image);
    $stmt = mysqli_prepare($GLOBALS["mysql"], "INSERT INTO films (name, year, description, descriptionLong, image, genre, director, status, youtube_video_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $status = 1;
    $stmt->bind_param("sisssssis", $name, $year, $description, $descriptionLong, $fileName, $genre, $director, $status, $yt_video_id);
    
    $stmt->execute();
}