<?php 
    include_once '../privatePhp/conn.php';
    if(!isset($_SESSION)){
        session_start();
    }
    $currentFileName = basename($_SERVER['PHP_SELF'],".php");
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="welcomHome.css">
    <link rel="icon" type="image/png" href="book1.png"/>
    <title>Edumo</title>
    <style>
.user_pic{
    width: 50px;
    border-radius: 50%;
    cursor: pointer;
    margin-left: 30px;
    margin-top: 10px;
    border: aqua dotted;
    margin-right: 35px;
}
body.dark .php span {
  color: #ff4321;
}
.php{
    font-size: 20px;
    font-weight: 500;
    font-family: "Comic Sans MS", sans-serif;
}
.php span{
    color: #00CED1 ;
}
body.dark .user_pic{
  border: #ff4321 dotted;
}
.sub-menu-wrap{
    position: absolute;
    top: 100%;
    right: 0.5%;
    width: 270px;   
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
    box-shadow: 4px 4px 5px 1px black;
    background-color: #fff;
    border-radius: 20px;
}
body.dark .sub-menu-wrap {
    background-color: #121212;
}
.sub-menu-wrap.open-menu{
    max-height: 400px;
}
.sub-menu{
    background: #fff;
    padding: 20px;
    margin: 10px;
    width: 270px;
    border-radius: 10px;
    z-index: 100;
    background-color: #fff;
}
body.dark .sub-menu {
    background-color: #121212;
}
.user-info{
    display: flex;
    align-items: center;
}
.user-info h2{
    font-weight: bold;
    color :#525252;
    font-size: 18px;
    font-family: "Comic Sans MS", sans-serif;
}
body.dark .user-info h2 {
    color: #fff;
}
.user-info img{
    width: 60px;
    border-radius: 50%;
    margin-right: 15px;
}
.sub-menu hr{
    border: 0;
    height: 1px;
    width: 100%;
    background: #ccc;
    margin: 15px 0 10px;
}
body.dark .sub-menu hr {
    color: #fff;
}
.sub-menu-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #525252;
    margin: 12px 0;
}
.sub-menu-link p{
    width: 100%;
}
.sub-menu-link img{
    width: 30px;
    background: #e5e5e5;
    border-radius: 50%;
    padding:8px;
    margin-right: 15px;
}
.sub-menu-link span{
    font-size: 22px;
    transition: transform 0.5s;
}
.sub-menu-link:hover span{
    transform: translateX(5px);
}
.sub-menu-link:hover p{
    font-weight: 600;
}
body.dark .sub-menu-link:hover p {
    color: #fff;
}
.p2wlc{
  font-size: 23px;
  font-weight: 500;
  font-family: "Comic Sans MS", sans-serif;
}
body.dark #profile{
    width: 90px;
    height: 90px;
}

    </style>
</head>
<body>
    <div class="headPage">
        <div id="H1Nav">
        <div id="h1Logo">
            <img src="book1.png" alt="logo" class="logo">
            <h1>E<span class="hm">dum</span>o <sup>ed</sup></h1>
        </div>
        <nav>
            <a href="welcomHome.php">Home</a>
            <a href="../Content/content.php">Content</a>
            <a href="../ContactUs/ContactUs.php">contact</a>
            <a href="#">About</a>
        </nav>
        </div>
        <img src="moon-removebg-preview.png" alt="moon" id="icon">
            <div id="dropDown">
                <img src ="profile.png" class ="user_pic" onclick ="toggleMenu()"/>
            </div>
        <div class="sub-menu-wrap" id ="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="user_pic.png" id="profile">
                    <h2> <?php echo  $_SESSION['Fullname']; ?></h2>
                </div>
                <hr>
                <a href="../editeProfile/editProfile.php" class ="sub-menu-link">
                <img src ="profile.png">
                <p>Edit Profile</p>
                <span> ></span>
                </a>
                <a href="#" class ="sub-menu-link">
                <img src ="setting.png">
                <p>Settings & privacy</p>
                <span > ></span>
                </a>
                <a href="../ContactUs/ContactUs.php" class ="sub-menu-link">
                <img src ="help.png">
                <p>Contact Us</p>
                <span> > </span>
                </a>
                <a href="logout.php" class ="sub-menu-link">
                <img src ="logout.png">
                <p>Logout</p>
                <span> > </span>
                </a>
            
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="wlc1">
            <h1 class="h1welcom">Edumo</h1>
            <h3>Learn programming </h3>
            <p class="p1wlc">Let's start building solutions for the world's problems!</p>
            <p class="p2wlc">
                Edemo Educational Platform provides you with diverse 
                and integrated content that helps you learn programming with ease and enjoyment.
            </p>
            
            <p class ="php">#  WELCOME , Fun Experience to you<span> Mr .
            <?php 
                echo  $_SESSION['Fullname'] ;
            ?>
            </span> # </p>
            <button><a href="../Content/content.php">start learning<br>Let's Go</a></button>
        </div>
        <img src="ooo-removebg-preview.png" alt="vector Online study" class="vectorOnlineStudy" >
    </div>
<div class="allFt">
    <h2 class="underWlc">The website's key features:</h2>
    <div class="features">
        <div class="feature1">
            <img src="download-removebg-preview (1).png" alt="checkBlue" id="checkBlue">
            <p class="p1ft1">Easy learning in Arabic</p>
            <p class="p2ft1">We provide educational content in a simple, enjoyable, and high-quality <span class="spanManner">manner.</span></p>
        </div>
        <div class="feature2">
            <img src="LU UNI.png" alt="libanise" class="LU">
            <p class="p1f2" class="animate__animated animate__tada animate__infinite"> Lebanese university courses</p>
            <p class="p2f2">This platform provides educational <br>courses offered by the Lebanese 
                <span class="spanuniversity">University.</span>
            </p>
        </div>
        <div class="feature3">
            <img src="technique.png" alt="tech" class="technique">
            <p class="p1f3">Latest technologies</p>
            <p class="p2f3">There are the most important modern technologies in various fields.</p>
        </div>
    </div>
</div>
<div class="underFeatures">
    <h2 class="h2Types">Types of educational content:</h2>
    <div class="types">
        <div class="type1">
            <img src="video.png" alt="video" class="video">
            <p class="p1t1">VIDEO</p>
            <p class="p2t1">Explanation videos for all <span class="spanP2t1">courses in Arabic.</span></p>
        </div>
        <div class="type2">
            <img src="app-removebg-preview.png" alt="project" class="project">
            <p class="p1t2">Applied projects</p>
            <p class="p2t2">They are exercices and applications for programming ideas to master <br><span class="them">them.</span></p>
        </div>
        <div class="type2">
            <img src="mapProgramming-removebg-preview.png" alt="map" id="map">
            <p class="p1t3">Map programming</p>
            <p class="p2t3">It includes a map of requirements <br> for each programming specialty.</p>
        </div>
        <div class="type1">
            <img src="exam_603685-removebg-preview.png" alt="exam" class="exam">
            <p class="p1t4"> Exams</p>
            <p class="p2t4">The old courses previously offered by the university <span class="spanp2t2">Libanaise.</span></p>
        </div>
    </div>
</div>
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
        <p>copyright &copy;2024 <a href=”#”>Edumo</a>  </p>
    </div>
</footer>

    <script src="welcomHome.js"></script>
    <script>
        let subMenu = document.getElementById('subMenu');
        document.sub-menu-wrap.classlist.toggle("dark");
 
function toggleMenu(){
    subMenu.classList.toggle("open-menu");
}
    
var icon = document.getElementById("icon");
icon.onclick=function(){
    document.body.classList.toggle("dark");
    if(document.body.classList.contains("dark")){
        document.getElementById("profile").src="Profile White.png";
}else {
    document.getElementById("profile").src="user_pic.png";

}}

    </script>

</body>
</html>