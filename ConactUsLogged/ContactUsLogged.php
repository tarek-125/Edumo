<?php 
    include_once '../privatePhp/conn.php';
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_POST['send'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['fullname'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];
        $date = date('Y-m-d', strtotime($_POST['date']));
        $message = $_POST['message'];

        $error=[];

        if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['date']) || empty($_POST['message'])) {
            $errors[] = ' all champs  is required';
        } 

        if(strlen($fullname) < 8 || preg_match('/[0-9]/', $fullname)) {
            $errors[] = "Full Name needs to have a minimum of 8 letters. It must not contain numbers.";
        }

        if(isset($_SESSION['username'])){
        if(!isset($errors)){
            $sql= "INSERT INTO contact VALUES ('','$fullname','$email','$phone','$date','$message')";
        mysqli_query($conn,$sql);
        header('location:../folderhomepageaftersignup/welcomHome.php');
        }}
        else{
            echo '<script>alert("Please sign up before sending your problem.");</script>';
        echo '<script>window.location.href="../ContactUs/ContactUs.php";</script>';
        exit;
        }


    }}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact US</title>
    <link rel="stylesheet" href="contactUsLogged.css">
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
    .contnair{
        height: 600px;
    }
    </style>
</head>
<body>
    <div class="headPage">
        <div class="head">
            <img src="book_13171152-removebg-preview.png" alt="img" id="logo">
            <h1>Edumo</h1>
        </div>
        <nav>
            <a href="../folder HomePage/welcomHome.html">Home</a>
            <a href="../Content/content.php">Content</a>
            <a href="../ConactUsLogged/ContactUsLogged.php">Contact</a>
            <a href="#">session</a>
        </nav>
    </div>
    <div class="contnair">
    <form action="" method="post">
        <h4>What Is Your Problem ?</h2>
        <ul id="errors"><?php
                    if(isset($errors)){
                        foreach ($errors as $error) {
                            echo '<li>' . $error . '</li>';
                        }
                    }
                ?></ul>
        <div class="underH2">
        <div class="UNDERH2">
        <div class="inputbox">
            <p>Full Name</p>
            <input type="text" name="fullname" id="fullname" placeholder="Entre your Name">
            <p>Email Address</p>
            <input type="text" name="email" id="email" placeholder="Exemple@gmail.com">
        </div>
        <div class="inputbox">
            <p>Phone Number</p>
            <input type="text" name="phone" id="phone">
            <p>Submission Date</p>
            <input type="date" name="date" id="date">
        </div>
        </div>
        <div class="message">
            <p>Message</p>
            <textarea name="message" id="message" cols="35" rows="20" placeholder="Entre your message..."></textarea>
        </div>
        </div>
        <button type="submit" name="send" id="send">SEND</button>
        <P>If you are logged in, click here <a href="../Sign Up/signup.php">Signup</a>... <a href="../Login/login.php">login</a></P>
        </form>
    </div>

    <script src="ContactUsLogged.js">
            if (! <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?> ) {
            var confirmLogin = confirm("please logged after send your problem");
            if (confirmLogin) {
                window.location.href = "login.php"; 
            } else {
            }
        }
    </script>
</body>
</html>