<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Assignment1</title>
    <script language="javascript">
        function checkMe() {
            if (document.getElementById('password').value != document.getElementById('confirmPassword').value) {
                alert("You need to confirm the right password");
                return false;
            }
            else {
                alert("Your password is right");
                return true;
            }
        }
    </script>
</head>
<body>

<form method="POST" action="Assignment1Post.php" onsubmit="return(checkMe())" style="width:30%;margin:auto" >
    <h2 style="text-align:center">REGISTER FORM</h2>
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
                Email<a style="color:red;"> *</a>
            </label>
            <div>
                <input name="email" class="form-control" type="email" placeholder="Enter email" required/>
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
        <div class = "row">
            <label >
                Confirm password<a style="color:red;"> *</a>
            </label>
            <div>
                <input name="confirmPassword" id="confirmPassword" class="form-control" type="password" placeholder="Enter password" required/>
            </div>

        </div>
        <div class = "row">
            <label >
                Gender
            </label>
            <select name="gender" class="input-large form-control">
                <option >Male</option>
                <option >Female</option>
            </select>
            <!-- <div >
                <input name="gender" class="form-control" type="gender" placeholder="Choose gender"/>
            </div> -->
        </div>
        <input type="submit" class="btn btn-primary" style="margin-top:25px;"/>
    </div>

</form>
</body>
</html>