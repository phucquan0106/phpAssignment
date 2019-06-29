<?php

$username = $_POST["username"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$label;
if (strcasecmp($gender, 'Male') == 0) {
    $label = 'ong';
} else if (strcasecmp($gender, 'Female') == 0) {
    $label = 'ba';
} else {
    $label = '';
    echo "Please choose an gender" . "<br/>";
}

echo "xin chao " . $label . " " . $username . "<br/>";
if ($password != $confirmPassword) {
    echo "Your password is wrong";
} else {
    echo "Your password is right";
}
