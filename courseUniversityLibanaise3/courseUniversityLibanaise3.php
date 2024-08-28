<?php 
    include_once('../privatePhp/conn.php');
    if(!isset($_SESSION)){
        session_start();
    }

    $tableName="cours";
    if (!$_SESSION['cours']) {
        $tableName="td";
    }

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <link rel="stylesheet" href="courseUniversityLibanaise3.css">
    <title>VIDEO COURS</title>
    <style>
        section{
            display: flex;
            justify-content: space-around;
            margin-top: 45px;
            flex-wrap: wrap;
        }
        .parts{
            width: 400px;
            height: 200px;
            background-color: #000;
            border-radius: 15px;
            margin-top: 25px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            transform: translate(0, -20px);
            transition: transform 0.5s ease;
        }

        .parts:hover {
            transform: translate(0, -30px);
            box-shadow: 0px 0px 10px 2px #000;
            width: 430px;
            height: 220px;
            transition: 1s;
        }
        
        .Apart{
            text-decoration: none;
            font-family: Verdana;
            font-size: 20px;
            color: #fff;
            
        }
        span{
            color: #c00;
        }
        p{
            position: relative;
            left: 10px;
        }
        header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            background-color: #222525;
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
        #iconVideo{
            width: 50%;
            height: 80%;
            display: flex;
            align-items: center;
            border-right: #fff 2px solid;
        }
        #video{
            width: 100px;
            height: 100px;
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
        body{
            background-color: #cccccc;
        }


    </style>
</head>
<body>
<header>
        <div class="H1Logo1">
            <img src="book_13171152-removebg-preview.png" alt="" class="logo">
            <h1 class="h111">Edumo</h1>
        </div>
        <a href="../courseUniversityLibanaise2/courseUniversityLibanaise2.php"><button>< Back</button></a>
        
    </header>

    <section>
        <?php
        $year=$_SESSION['year'];
        $code=$_SESSION['code'];
        $chapter=$_SESSION['chap'];
        $sems=$_SESSION['sems'];
            if(isset($_SESSION['cours'])){
            $sql = "SELECT * FROM `" .$tableName ."` WHERE year='$year'
            AND code='$code'AND chapter='$chapter' AND semester='$sems' ORDER BY indexx ASC";
            $result = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($result);
            if($num_rows != 0){
                while($row = mysqli_fetch_assoc($result)){
                    $nameVideo = $row['nameVideo'];
                    $index =$row ['indexx'];
                    echo
                    "<a href='../courseUniversityLibanaise4/courseUniversityLibanaise4.php?index=" . $index . "' class='Apart'>
                        <div class='parts'>
                            <div id='iconVideo'>
                            <img src='iconVideo.png' alt='' id='video'>
                            </div>
                            <p>
                                Get ready to explore video <span>" . $nameVideo . "</span> of Chapter <span> " . $_SESSION['chap'] . "</span>
                                in the <span>" . $_SESSION['code'] . "</span> course, where this box takes you directly to the video. 
                                Click on it to watch .
                            </p>
                        </div>
                    </a>";
                }
                
            }
        }
        ?>
    </section>





</body>