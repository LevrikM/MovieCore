<?php

//Цей код містить дві функції, які виконують пошук фільмів за назвою та жанром.
// В обох випадках виконується запит до бази даних з відповідним умовним оператором SQL,
// який використовує ключове слово "LIKE" для пошуку фільмів з назвою або жанром, які містять рядок $findFilm.
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
//Функції повертають результат запиту у вигляді асоціативного масиву,
// який можна подати на відображення у вигляді таблиці або в іншому вигляді на сторінці веб-сайту.
