<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListPage</title>
</head>
<body>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($username))
{
    $_SESSION['current_user'] = $username;
}
echo $_SESSION["current_user"];
$servername = "localhost";
$userDB = "root";
$passDB = "";
$dbName = 'T1806E';
$conn = new mysqli($servername, $userDB, $passDB, $dbName);
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "
    <table>
        <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>status</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row ['id'] ."</td>";
        echo "<td>".$row['username'] ."</td>";
        echo "<td>".$row['email'] ."</td>";
        echo "<td>".$row['password'] ."</td>";
        echo "<td>".$row['status'] ."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>