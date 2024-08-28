<?php 
    include_once "../privatePhp/conn.php";
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_POST['send'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username =  $_POST['username'];
            $password =  $_POST['pass'];
        
        
            $errors = [];
            if(!$username){
                $errors[] = 'username is required';
            }
            if(!$password){
                $errors[] = 'Password is required';
            }
            if(empty($errors)){
                $sql = "SELECT * FROM `signup` WHERE UserName='$username' AND Password='$password' limit 1";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_rows = mysqli_num_rows($result);
                if($num_rows != 0){
                    $_SESSION['Fullname']=$row['FullName'];
                    $_SESSION['username']=$row['UserName'];
                    $_SESSION['email']=$row['Email'];
                    $_SESSION['password']=$row['Password'];
                    header('location:../folderhomepageaftersignup/welcomHome.php');
                }
                else{
                    $errors[] = 'Wrong Password or Email';
                }
            }

        }}
    
?>


<!DOCTYPE html>
        <html lang="en" >
        <head>
        <meta charset="UTF-8">
        <title> Login Enumo</title>
        <link rel="stylesheet" href="login.css">
        <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>


        <style>
            form ul{
        display: block;
        margin: 0;
        background: #c00;
        color: #fff;
        width: 100%;
        border-radius:4px;
        list-style-position: inside;
        list-style-type: square;
        padding: 10px;
        font-size:0.9em;
    }
    form ul:empty{
        padding: 0;
    }
    </style>
        </head>
        <body>
        <div class="container">
        <div class="login-box">
            <h2 class="h2Move">Log In</h2>
            <form action="" method="post">
            <ul id="errors"><?php
                    if(isset($errors)){
                        foreach ($errors as $error) {
                            echo '<li>' . $error . '</li>';
                        }
                    }
                ?></ul>
            <div class="input-box">
                <input type="text" name="username" required>
                <label>User Name</label>
            </div>
            <div class="input-box">
                <input type="password"  name="pass" required>
                <label>Password</label>
            </div>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <input type="submit" class="btn" id="send" name="send" value="Log in ">
            <div class="signup-link">
            <a href="../Sign Up/signup.php">Signup</a>
            </div>
            </form>
        </div>
        </div>
        </body>
        </html>



        <script src="login.js"></script>
</body>
</html>