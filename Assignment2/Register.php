<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>RegisterPage</title>
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<form id="postList" method="POST" action="Login.php" style="width:30%;margin:auto" >
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
                Status
            </label>
            <select name="status" class="input-large form-control">
                <option >Yes</option>
                <option >No</option>
            </select>
            <!-- <div >
                <input name="gender" class="form-control" type="gender" placeholder="Choose gender"/>
            </div> -->
        </div>
        <button type="submit"   style="margin-top:25px;">Submit</button>
    </div>

</form>
<script>
    function postAjax() {
        jQuery.ajax({
            url:"CheckRegister.php",
            type:"POST",
            data:{
                username: jQuery("#postList input[name='username']").val(),
            },
            success: function(result) {
                if(result == 1){
                    alert("The username existed");

                }
                else {
                    alert("Register success");
                    window.location.href = "Login.php";
                }
            }
        })
    }
</script>
</body>
</html>