<?php 
session_start();
include_once ("../privatePhp/conn.php");

if(isset($_SESSION['code'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['sendCOURS'])){
        $_SESSION['cours']=true;
    }
    else{
        $_SESSION['cours']=false;
    }
    header("location:../courseUniversityLibanaise3/courseUniversityLibanaise3.php");
}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <link rel="stylesheet" href="courseUniversityLibanaise2.css">
    <title>COURS AND TD</title>
    <style>
        body{
            background-color: #cccccc;
        }
        button{
            border: none;
            width: 100px;
            height: 50px;
            background-color: #000;
            position: relative;
            right: 20px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            box-shadow: 0px 0px 5px 2px #fff;
        }
        header{
            background-color: #fff;
            box-shadow: 0px 0px 10px 3px #fff;
        }
    </style>
</head>
<body>
<header>
        <div class="H1Logo1">
            <img src="book_13171152-removebg-preview.png" alt="" class="logo">
            <h1 class="h111">Edumo</h1>
        </div>
        <a href="../Course University Libanaise/CourseUniversityLibanaise.php"><button>< Back</button></a>
    </header>
    <form action="" method="post">
    <section class="sec1">
        <div class="horizental">
            <p class="p1">
                Please review the collection of videos related to the requested subject matter,
                which was requested by chapter, and choose whether you would like to watch videos
                related to theoretical lessons (Cours) or practical exercises (TD).
            </p>
            <p class="p2"><span>This material was presented by <br>
            <abbr title="This esteemed doctor is the one who taught the subject in 2021."> <u> Dr. <?php echo $_SESSION['dct']; ?> </u></abbr></span> </p>
        </div>
        <div class="big">
            <div class="cour">
                <p class="p3">
                    Inside this box are all the videos for Chapter <?php echo $_SESSION['chap']; ?>
                    of the <span class="mede">course <?php echo  $_SESSION['code']; ?> </span>.
                    Click the button to access the videos and watch them.
                </p>
                <input type="submit" name="sendCOURS" id="send" value="Cours >">
            </div>
            <div class="td">
                <p class="p4">
                    Inside this box are all the videos for Chapter <?php echo $_SESSION['chap']; ?>
                    of the <span class="mede">TD <?php echo $_SESSION['code']; ?> </span>.
                    Click the button to access the videos and watch them.
                </p>
                <input type="submit" name="sendTD" id="send" value="TD > ">
            </div>
        </div>
    </section>
    </form>
</body>
</html>