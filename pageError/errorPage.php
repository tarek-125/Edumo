<?php
include_once('../privatePhp/conn.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['video'])) {
    $redirect_page2 = "../Course University Libanaise/CourseUniversityLibanaise.php";
} else {
    $redirect_page2 = "../SessionsoflebaneseUniversity/SessionsOfLebaneseUniversity.php";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <link rel="stylesheet" href="errorPage.css">
    <title>NOT FOUND</title>
    <style>
    header{
        width: 100%;
        height: 200px;
        display: flex;
        justify-content: flex-start;
    }
    .logo{
        width: 70px;
        height: 70px;
    }
    h1{
        font-family: "Comic Sans MS", sans-serif;
    }
    section{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        max-height: 600px;
    }
    .flipped-image{
        transform: scaleX(-1);
        position: relative;
        bottom: 140px;
    }
    p{
        font-size: 22px;
        font-family: "Comic Sans MS", sans-serif;
    }
    button{
        width: 130px;
        height: 55px;
        border-radius: 10px;
        background-color: black;
        color: #fff;
        position: relative;
        left: -420px;
        top: 70px;
        cursor: pointer;
    }
    span{
        color: red;
        position: relative;
        bottom: 40px;
    }
    .PForm{
        background-color: rgba(255, 0, 9, 0.2);
        margin: 0;
        padding: 0;
        height: 250px;
        display: flex;
        align-items: center;
    }

    </style>
</head>



<body>
    <header>
        <img class="logo" src="book_13171152-removebg-preview.png" alt="">
        <h1>Edumo</h1>
    </header>
    <section>
        <div class="PForm">
            <p>
                <span>Sorry, no results match your search. You can try again with different keywords or refine 
                your search criteria </span><br>
                click here to back : 
            </p>
                <a href="<?php echo $redirect_page2; ?>"><button>< Back</button></a>
        </div>
        <img class="flipped-image"  src="innovation-cycle-generation-of-a-creative-idea-or-business-solution-vector-removebg-preview.png" alt="">
    </section>
</body>
</html>