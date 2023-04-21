<?php

//Функція getFilmInfo вибирає рядок даних з таблиці films, використовуючи унікальний ідентифікатор id.
// Після виконання запиту вона повертає результат в зрозумілому для звичайного користувача форматі,
// використовуючи функцію convertToReadableData.
function getFilmInfo($id){
    $sql = "SELECT * FROM films where id = '$id'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}


//Функція addFilm додає новий рядок даних в таблицю films.
// Вона використовує вхідні параметри, щоб вставити новий запис в таблицю.
// Стовпець status встановлюється як 1, означаючи, що фільм є доступним для перегляду.
function addFilm($name, $year, $description, $descriptionLong, $image, $genre, $director){
    $sql = "INSERT INTO films (name, year, description, descriptionLong, image, genre, director, status) VALUES ('$name', '$year', '$description', '$descriptionLong', '$image', '$genre', '$director', 1)";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
}