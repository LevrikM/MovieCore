<?php

function registerUser($name, $login, $email, $password){
    $sql = "INSERT INTO users (name, login, email, password, privilege) VALUES ('$name', '$login', '$email', '$password', 0)";
    $res = (mysqli_query($GLOBALS["mysql"], $sql));

    if($res != null) echo
    "<script>
            alert('Користувач успішно зареєстрований!')
            location.assign('http://techblog/account/auth/');
     </script>";
}

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