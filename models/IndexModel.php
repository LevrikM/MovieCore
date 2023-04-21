<?php

//Ця функція отримує всі фільми з бази даних, використовуючи запит SQL до таблиці "films".
// Результат запиту записується в змінну $record_set, яка передається до функції convertToReadableData()
// для перетворення результату запиту в зручний формат. Функція повертає перетворений результат запиту.
function getAllFilms(){
    $sql = "SELECT * FROM films";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}