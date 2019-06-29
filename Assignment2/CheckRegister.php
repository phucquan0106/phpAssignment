<?php

$username = $_POST['username'];
$servername = "localhost";
$userDB = "root";
$passDB = "";
$dbName = 'T1806E';
$conn = new mysqli($servername, $userDB, $passDB, $dbName);
$sql1 = "SELECT * FROM user WHERE username LIKE '" . $username . "'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    echo 1;
} else {
    echo 0;
}