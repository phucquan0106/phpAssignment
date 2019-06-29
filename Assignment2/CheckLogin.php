<?php
$username = $_POST['username'];
$password = $_POST['password'];
$servername = "localhost";
$userDB = "root";
$passDB = "";
$dbName = 'T1806E';
$conn = new mysqli($servername, $userDB, $passDB, $dbName);
$sql3 = "SELECT * FROM user WHERE username LIKE '".$username."' AND password LIKE '".$pass."' LIMIT 1";
$result3 =  $conn->query($sql3);
if($result3->num_rows > 0){
    echo 1;
}else{
    echo 0;
}