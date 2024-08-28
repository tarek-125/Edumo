<?php 
    include_once('../privatePhp/conn.php');
    if(!isset($_SESSION)){
        session_start();
    }
    $tableName="cours";
    if (!$_SESSION['cours']) {
        $tableName="TD";
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <link rel="stylesheet" href="courseUniversityLibanaise4.css">
    <title>VIDEO COURS</title>
    <style>
        header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            background-color: #222525;
        }
        body{
            background-color: #cccccc;
        }
        nav a {
            font-weight: bold;
            padding: 10px 10px;
            text-decoration: none;
            color: #cccccc;
            margin: 20px;
        }
        .h111{
            color: #fff;
            font-size: 45px;
            font-family: "Comic Sans MS", sans-serif;
        }

        video{
            width: 80%;
            height: 500px;
            margin-top: 50px;
        }
        section{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        button{
            border: none;
            width: 100px;
            height: 50px;
            background-color: #cccccc;
            position: relative;
            right: 20px;
            border-radius: 10px;
            color: #000;
            cursor: pointer;
            font-size: 18px;
            box-shadow: 0px 0px 5px 2px #fff;
        }

    </style>
</head>
<body>
<header>
        <div class="H1Logo1">
            <img src="book_13171152-removebg-preview.png" alt="" class="logo">
            <h1 class="h111">Edumo</h1>
        </div>
        <a href="../courseUniversityLibanaise3/courseUniversityLibanaise3.php"><button>< Back</button></a>
    </header>

    <section>
        <?php 
    if(isset($_SESSION['cours'])){
    if(isset($_GET['index'])) {
    $index = $_GET['index'];
    $sql = "SELECT path FROM `" .$tableName."` WHERE indexx = '$index'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $videoPath = $row['path'];
        echo "<video controls>
                    <source src='$videoPath' type='video/mp4' controls>
            </video>";
    } else {
        echo "0 results";
    }}}else{
        if(isset($_GET['index'])) {
            $index = $_GET['index'];
            $sql = "SELECT path FROM `" .$tableName."` WHERE indexx = '$index'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $videoPath = $row['path'];
                echo "<video controls>
                            <source src='$videoPath' type='video/mp4' controls>
                    </video>";
            } else {
                echo "0 results";
            }}
    }
    ?>
    </section>
</body>