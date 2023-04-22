<?php

//Функція registerUser виконує запит до бази даних та додає нового користувача до таблиці
// users з вказаними параметрами. У разі успішного додавання користувача виводиться сповіщення
// про успішну реєстрацію та перенаправляється на сторінку авторизації.
function registerUser($name, $login, $email, $password){
    $sql = "INSERT INTO users (name, login, email, password, privilege) VALUES ('$name', '$login', '$email', '$password', 0)";
    $res = (mysqli_query($GLOBALS["mysql"], $sql));

    if($res != null) echo
    "<script>
            alert('Користувач успішно зареєстрований!')
            location.assign('http://techblog/account/auth/');
     </script>";
}


//Функція authUser виконує запит до бази даних та перевіряє наявність користувача з вказаним логіном та паролем.
// Якщо користувач існує, повертається результат запиту у вигляді асоціативного масиву, який містить всі дані про користувача.
// Якщо користувач не знайдений, функція повертає null. Прикоментований код в середині функції не
// міститься в умовному операторі, тому він виконується при кожному виклику функції, незалежно від
// результату запиту до бази даних. Цей код має на меті вивести повідомлення про успішний або неуспішний
// вхід користувача в систему та зберегти його логін в сесію. Проте, у поточному вигляді коду це не працюватиме,
// оскільки код виконується в петлі, яка не залежить від результату запиту до бази даних.
function authUser($login, $password){
    $sql = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);



//    foreach ($record_set as $item){
//        if($item["login"] == $login){
//            echo "<script>
//                alert('Успішний вхід!');
//            </script>";
//            $_SESSION["userLogin"] = $login;
//
//        }
//        echo "<script>
//            alert('Перевірте введення даних!')
//            location.assign('http://techblog/account/auth');
//        </script>";
//    }


}