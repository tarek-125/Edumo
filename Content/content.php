<?php
include_once ('../privatePhp/conn.php');
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
    <title>Content</title>
    <link rel="stylesheet" href="content.css">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
</head>
<body>
    <header class="headpage">
        <div class="ImgH1">
            <img src="book_13171152-removebg-preview.png" alt="icon" id="logo">
            <h1>Edumo</h1>
        </div>
        <nav>
            <a href="<?php echo $redirect_page; ?>">Home</a>
            <a href="../Content/content.php">Content</a>
            <a href="../ContactUs/ContactUs.php">Contact US</a>
            <a href="#">Session</a>
        </nav>
    </header>
    <section class="sec1">
        <div class="university">
            <div class="H1PBtn">
                <div class="ImgH1">
                    <div class="LUBox">
                        <img src="LU UNI.png" alt="" class="LU">
                    </div>
                    <h1>Lebanese university courses</h1>
                </div>
                <p>
                    If you're looking to access all Lebanese university courses from the first year to the third
                    year online, our website offers a wide range of high-quality material videos. 
                    Browse our extensive collection and click here to select and start your educational 
                    journey.
                </p>
                <button type="submit"><a href="../Course University Libanaise/CourseUniversityLibanaise.php">Start ></a></button>
            </div>
            <img alt="" class="imgUni" src="imageUniversity.png"/>
        </div>
    </section>
    <section class="sec2">
        <div class="H1Psec2">
            <h1>Lebanese University Sessions</h1>
            <p>
                With great appreciation, we are pleased to provide a list of all sessions offered at 
                the Lebanese University to the best of our ability, along with solutions for some.
                We are always striving to deliver excellent and professional service to our students, 
                and we hope that these resources will be beneficial to you on your academic journey.
            </p>
            <button type="submit"><a href="../SessionsoflebaneseUniversity/SessionsOfLebaneseUniversity.php">click here to get sessions</a></button>
        </div>
        <img src="download (1).svg" alt="">
    </section>
    <section class="sec3">
        <div id="img1sec3">
            <img src="download4.svg" alt="">
        </div>
        <div class="H1Psec3">
            <h1>Map programming</h1>
            <p>
                We are pleased to present to you on our website a programming roadmap 
                that illustrates the paths of each specialization in the field of programming,
                providing you with a comprehensive understanding of what is required in each specialization.
                We look forward to providing you with the necessary knowledge and resources to achieve 
                success in your programming journey.
            </p>
            <button type="submit"><a href="../MapProgramming/MapPrograming.php">Click To View</a></button>
        </div>
        <img src="download.svg" alt="" id="img2sec3">
    </section>
    <hr class="hr1">
    <section class="sec4">
        <div class="H1Psec4">
            <h1>Courses outside the university</h1>
            <p>
                A selection of programming courses from outside the Lebanese University has been 
                made available, sourced from various leading educational platforms. These courses contribute
                to enhancing programming skills and expanding knowledge, enabling you to improve your 
                performance and excel comprehensively in the field of programming. We are committed to 
                delivering a professional and beneficial educational experience, striving to empower you
                to achieve success and excellence in your professional journey.
            </p>
            <button type="submit"><a href="../course out university/course out.php">Go ></a></button>
        </div>
        <img src="60e25cbc6ab9f4d2c8564729127bf9eb.gif" alt="">
    </section>
    <hr>
    <footer>
        <div class="ulfoot">
            <h3>Edumo</h3>
            <p>Edumo is a website where you will find fantastic lessons about learning and mastering <br> programming 
                through external courses or Lebanese university courses. It also contains a <br> <span class="spanfoot">map for each specialization
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
            <p>copyright &copy;2024 <a href="../folder HomePage/welcomHome.html">Edumo</a>  </p>
        </div>
    </footer>
</body>
</html>