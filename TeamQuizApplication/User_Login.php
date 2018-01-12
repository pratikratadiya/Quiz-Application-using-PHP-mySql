<!DOCTYPE html>
<?php include "db_connect.php"; ?>
<?php
    session_start();
    $error="";
    if(isset($_POST["submit"]))
    {
        $_SESSION["submit"]=$_POST["submit"];
        $_SESSION["username"]=$username=$_POST["username"];
        $_SESSION["password"]=$password=$_POST["password"];
        $query=mysqli_query($connect,"SELECT * FROM details
                                        WHERE Username='$username' AND Password='$password'");
        if(mysqli_num_rows($query)!=0)
        {
            header('Location: User_Profile.php');
        }
        else
        {
            $error="Invalid Username or Password";
        }
    }
?>
<html lang="en">
<head>
    <title>Quiz Login</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="quiz_app.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
function hello(){
var flag=true;
            var x=document.forms["form1"];
            if(x["username"].value=="")
                {
                    document.getElementById("errusername").innerHTML="Username cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errusername").innerHTML="";
                }

            if(x["password"].value=="")
                {
                    document.getElementById("errpassword").innerHTML="Password cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errpassword").innerHTML="";
                }
            return flag;
}
</script>
<style>


.form-horizontal label{
width:150px;
float:left;
font-size:150%;
color:white;
margin-left:20%;
margin-right:8%;
}
    a{
        color: white;
        margin-left: 20%;
    }
    a:hover
    {
        color:gainsboro;
    }

</style>
</head>
<body>
    <div id = "header"><span id = "header-content"><b>LOGIN</b></span> 
</div>

<br><br><br>
<form class="form-horizontal" id="login-details" role="form" name="form1" onsubmit=" return hello()" action="User_Login.php" method="post">
<div class="container">

<div class="form-group">
<label>Username<sup style="color:red;">*</sup></label>
<input type="text" class="form-control" id="username" placeholder="Enter your profile username" style="width:35%;" name="username">
<div style="color:red;" id="errusername"></div>
</div>
    
<br><br>

<div class="form-group">
<label>Password<sup style="color:red;">*</sup></label>
<input type="password" class="form-control" id="password" placeholder="Enter password for your account" style="width:25%;" name="password">
<div style="color:red;" id="errpassword"><?php echo $error ?></div>
</div>

<br><br><br>

</div>

<a href="Signup.php">Don't have an account?Create one!</a>
<br>

<div class="form-group">
<input type="submit" class="btn btn-primary" style="border:1px solid; border-color:black; margin-left:45%;" name="submit" value="LOGIN">
<button type="reset" class="btn btn-primary" style="border:1px solid; border-color:black; margin-left:3%;">RESET</button></div>
    <div class="form-group"><b><p class="text-muted" style="margin-left:450px; color:black; font-size:15px;"><span style="color:white">&#40;</span><span style="color:red;">&#42;</span><span style="color:white">&#41;marked fields are compulsory.</span></p></b>
    </div>
</form>


<br><br><br>
<br><br><br>
</body>
</html>

