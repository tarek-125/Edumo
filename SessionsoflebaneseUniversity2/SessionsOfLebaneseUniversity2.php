<?php
    include_once("../privatePhp/conn.php");
    if(!isset($_SESSION)){
        session_start();

        if(isset($_POST['back'])){
            header('location:../SessionsoflebaneseUniversity/SessionsoflebaneseUniversity.php');
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <title>PDF</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header{
            color: #fff;
            background-color: #181818;
            height: 100px;
        }
        .H1logo{
            display: flex;
            justify-content: flex-start;
            position: relative;
            left: 50px;
            top: 20px;
        }
        section{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            position: relative;
            top: 30px;
        }
        .icon{
            width: 70px;
            height: 70px;
        }
        h3{
            font-family: "Comic Sans MS", sans-serif;
            color: #495057;
            position: relative;
            left: 30px;

        }
        embed{
            width: 90%;
            height: 650px;
            border-radius: 20px;
            position: relative;
            top: 30px;
            box-shadow: 0px 0px 10px 3px #000;
        }
        u{
            color: blueviolet;
        }
        .h1{
            position: relative;
            top: 20px;
        }
        .h11{
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            position: relative;
            left: 30px;
        }
        
        .description{
            border-left: 4px #000 solid;
            border-bottom: 6px #000 solid;
        }
        .back{
            border: none;
            width: 100px;
            height: 50px;
            background-color: #fff;
            position: relative;
            left: 90%;
            bottom: 40px;
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
        <div class="H1logo">
        <img src="book_13171152-removebg-preview.png" alt="" class="icon">
        <h1 class="h1">Edumo</h1>
        </div>
        <form action="" method="post">
            <input type="submit" value="< Back" name="back" class="back">
        </form>
    </header>
    <section>
        <div class="description">
            <h1 class="h11"><span><?php echo $_SESSION['code'] ;?></span></h1>
            <h3>
                We are pleased to inform you that a list of all available courses in subject has been provided in a single PDF file :
            </h3>
        </div>
        <?php  $path=$_SESSION['path'] ; ?>
        <embed src="<?php echo $path; ?>" >
    </section>
</body>
</html>