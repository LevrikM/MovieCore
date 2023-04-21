<?php

//Функція loadPage призначена для завантаження сторінки з відповідним контролером та дією.
// Вона приймає об'єкт Smarty $smarty, назву контролера $controllerName та назву дії $action.
// Перевіряється наявність файлу з контролером, якщо він існує, то відповідна функція дії $action
// запускається за допомогою функції function_exists.
function loadPage($smarty, $controllerName, $action="index"){
    if(file_exists(PathPrefix.$controllerName.PathPostfix)){
        require_once PathPrefix.$controllerName.PathPostfix;
        $func = $action."Action";
        if(function_exists($func)){
            $func($smarty);
        }
    }
}

//Функція convertToReadableData конвертує результат запиту до бази даних в більш зрозумілий
// формат для подальшої обробки. Вона приймає результат запиту до бази даних $record_set.
// Якщо $record_set є дійсним, функція перебирає всі рядки в $record_set та записує кожен рядок в масив $readableData.
// По завершенні перебору, функція повертає $readableData.
function convertToReadableData($record_set){
    if(!$record_set) return false;
    $readableData = array();
    while ($row = mysqli_fetch_assoc($record_set)){
        $readableData[] = $row;
    }
    return $readableData;
}

//Функція loadTemplate відповідає за відображення вибраного шаблону.
// Вона приймає об'єкт Smarty $smarty та назву шаблону $templateName.
// Функція використовує метод display об'єкта $smarty, щоб відобразити шаблон.
function loadTemplate($smarty, $templateName){
    $smarty -> display($templateName.TemplatePostfix);
}