<?php
$server= "localhost";
$user= "root";
$password= "";
$database= "project";
session_start();
$conn= mysqli_connect($server,$user,$password,$database);
if(!$conn){
    echo "<script>alert('CONNECTION FAILED.')</script>";
}
if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM user_tb WHERE Email_id='$email' AND Password='$password'";
    $result=$mysqli_query($conn,$sql);
    if(!$result) {
        echo "<script>alert('CONNECTION FAILED.')</script>";
    }
    else{
        echo "<script>alert('WELCOME')</script>";
    }
}
?>
<html>
    <head>
        <title>Home-Login</title>
        <link rel="stylesheet" href="user-login.css">
    </head>
    <body>
        <div class="center">
            <h1>Login</h1>
           <form action="" method="POST">
            <div class="txt">
                <input type="text" name="username" id="">Username
            </div>
            <div class="txt">
                <input type="password" name="password" id="">Password
            </div>
            <div class="forgot">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup">
                Don't have an account? <a href="#">Signup</a>
            </div>
           </form>
        </div>
    </body>
</html>