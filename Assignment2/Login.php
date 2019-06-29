<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>LoginPage</title>
</head>
<body>
<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$yesno = $_POST['status'];
$status;
if(strcasecmp($yesno,'yes')==0)
{
    $status = 1;
}
else
{
    $status = 0;
}
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
$sql2 = "INSERT INTO user(`username`, `email`, `password`, `status`) VALUES ('$username','$email','$password',$status)";
$conn->query($sql2);
?>
<form id="postLogin" method="POST" action="List.php" style="width:30%;margin:auto" >
    <h2 style="text-align:center">LOGIN FORM</h2>
    <div class="form-group" style="padding-top:25px;">

        <div class = "row">
            <label >
                Username<a style="color:red;"> *</a>
            </label>
            <div >
                <input name="username" class="form-control" type="username" placeholder="Enter username" required/>
            </div>
        </div>
        <div class = "row">
            <label >
                Password<a style="color:red;"> *</a>
            </label>
            <div>
                <input name="password" id="password" class="form-control" type="password" placeholder="Enter password" required/>
            </div>
        </div>
        <button type="submit"   style="margin-top:25px;">Submit</button>
    </div>
    <script>
        function postAjax() {
            jQuery.ajax({
                url: "CheckLogin.php",
                type: "POST",
                data:{
                    username: jQuery("#postLogin input[name='username']").val(),
                    password: jQuery("#postLogin input[name='password']").val(),
                },
                success: function (result) {
                    if(result == 1){
                        alert("Login success...");
                        window.location.href = "List.php";
                    }else {
                        alert("login fail");
                    }
                }
            });
        }
    </script>
</form>
</body>
</html>
