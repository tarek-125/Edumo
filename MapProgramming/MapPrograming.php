<?php
    include_once('../privatePhp/conn.php');
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['username'])) {
        $redirect_page = "../folderhomepageaftersignup/welcomHome.php";
    } else {
        $redirect_page = "../folder HomePage/welcomHome.html";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <link rel="stylesheet" href="MapPrograming.css">
    <title>Map Programing</title>
</head>
<body>
    <header>
        <div class="H1Logo">
            <img src="book_13171152-removebg-preview.png" alt="" class="logo">
            <h1 class="h111">Edumo</h1>
        </div>
        <img src="moon-removebg-preview.png" alt="moon" id="icon">
        <nav>
            <a href="<?php echo $redirect_page; ?>">Home</a>
            <a href="../Content/content.php">Content</a>
            <a href="../ContactUs/ContactUs.php">Contact US</a>
            <a href="#">Session</a>
        </nav>
    </header>
    <section class="sec1">
        <h1>Start learning ..</h1>
        <h4>Here are the specialization maps in programming to facilitate following the correct learning path.</h4>
    </section>
    <section class="sec2">
        <div class="Firstdiv">
            <a href="../MapProgmming page 2/MapProgPage2.php?index=0"><div class="div1"><p>Frontend ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=1"><div class="div1"><p>Backend   ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=2"><div class="div1"><p>Full Stack ></p></div></a>
        </div>
        <div class="Seconddiv">
            <a href="../MapProgmming page 2/MapProgPage2.php?index=3"><div class="div1"><p>Android ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=4"><div class="div1"><p>Flutter ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=5"><div class="div1"><p>Java ></p></div></a>
        </div>
        <div class="thirdDiv">
            <a href="../MapProgmming page 2/MapProgPage2.php?index=6"><div class="div1"><p>AI and Data Scientist ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=7"><div class="div1"><p>Computer Science > </p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=8"><div class="div1"><p>Cyber Security ></p></div></a>
        </div>
        <div class="fourthDiv">
            <a href="../MapProgmming page 2/MapProgPage2.php?index=9"><div class="div1"><p>Linux ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=10"><div class="div1"><p>Python ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=11"><div class="div1"><p>C++  ></p></div></a>
        </div>
        <div class="fiveDiv">
            <a href="../MapProgmming page 2/MapProgPage2.php?index=12"><div class="div1"><p>UX Design ></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=13"><div class="div1"><p>Data Structures & Algorithms></p></div></a>
            <a href="../MapProgmming page 2/MapProgPage2.php?index=14"><div class="div1"><p>Design System></p></div></a>
        </div>
    </section>
    <footer>
        <div class="ulfoot">
            <h3>Edumo</h3>
            <p>Edumo is a website where you will find fantastic lessons about learning and <br>mastering programming 
                through external courses or Lebanese university  <br> courses. It also contains a <span class="spanfoot">map for each specialization
                outlining its requirements.</span></p>
            <ul class="facee">
                <li>
                    <a href="#"><img src="5305154_fb_facebook_facebook logo_icon.png" alt="face" id="face"></a>
                </li>
                <li class="insta">
                    <a href="#"><img src="38-instagram-2-64.png" alt="insta" id="insta"></a>
                </li>
                <li class="X">
                    <a href="#"><img src="X-64.png" alt="x" id="x"></a>
                </li>
                <li class="snap">
                    <a href="#"><img src="Circled_Snapchat_svg-64.png" alt="snap" id="snap"></a>
                </li>
            </ul>
        </div>
        <hr class="hrfoot">
    <div class="bottomfoot">
        <p>copyright &copy;2024 <a href=”#”>Edumo</a>  </p>
    </div>
</footer>
<script src="MapPrograming.js"></script>
</body>
</html>