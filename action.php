<?php

$errors = [];

if (isset($_POST['register'])) {
    // foreach ($_POST as $key => $value) {
    //     if (empty($value)) {
    //         $errors[$key] = "This field cant be empty";
    //     }
    // }

    $NOT_EMPTY_MESSAGE = "This field can't be empty";
    if (empty($_POST['first_name'])) {
        $errors["first_name"] = $NOT_EMPTY_MESSAGE;
    }
    if (empty($_POST["last_name"])) {
        $errors["last_name"] = $NOT_EMPTY_MESSAGE;
    }
    if (empty($_POST["username"])) {
        $errors["username"] = $NOT_EMPTY_MESSAGE;
    }
    if (empty($_POST["email"])) {
        $errors["email"] = $NOT_EMPTY_MESSAGE;
    }
    if (empty($_POST["password"])) {
        $errors["password"] = $NOT_EMPTY_MESSAGE;
    }
}

?>