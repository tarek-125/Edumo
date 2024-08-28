<?php 
    include_once ('../privatePhp/conn.php');
    if(!isset($_SESSION)){
        session_start();
    } 
    if(isset($_POST['send'])){
        $year=$_POST['year'];
        $code=$_POST['code'];
        $semester=$_POST['semester'];
        if(isset($_SESSION['username'])){
        $sql="SELECT * FROM `session` WHERE year='$year' AND code='$code' AND semester='$semester'";
        $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_rows = mysqli_num_rows($result);
                if($num_rows != 0){
                    $_SESSION['year']=$row['year'];
                    $_SESSION['code']=$row['code'];
                    $_SESSION['semester']=$row['semester'];
                    $_SESSION['path']=$row['path'];
                    header('location:../SessionsoflebaneseUniversity2/SessionsoflebaneseUniversity2.php');
                }
                else{
                    header('location:../pageError/errorPage.php');
                }}}

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
    <link rel="stylesheet" href="SessionsOfLebaneseUniversity.css">
    <title>Course University Lebanese</title>
    <style>
#code{
    background-color: #f9f9f9;
    border: 1px solid #dddddd;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    color: #000;
    cursor: pointer;
    width: 160px;
    font-family:"Comic Sans MS", sans-serif;
    position: relative;
    top: 65px;
    left: 10%;
}

#button{
    border: none;
    width: 100px;
    height: 50px;
    background-color: #181717;
    position: relative;
    top: 150px;
    left: 45%;
    border-radius: 10px;
    color: #fff;
    cursor: pointer;
    font-size: 18px;
}
.small{
    min-height: 250px;
    width: 18%;
}
#semester {
    background-color: #f9f9f9;
    border: 1px solid #dddddd;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    color: #000;
    cursor: pointer;
    width: 200px;
    font-family:"Comic Sans MS", sans-serif;
    position: relative;
    top: 55px;
    left: 10%;
}
.a{
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
    position: relative;
    top: 250px;
    font-weight: bold;
}
body.dark .a{
    color: #ff4321;
}
.log{
    display: inline;
    position: relative;
    top: 250px;
    font-size: 20px;
}
body.dark .log{
    color: #fff;
}
span{
    color: red;
}

    </style>
</head>
<body>
    <header>
        <div class="H1Logo1">
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
    <section>
        <div class="big">
            <div class="H1Logo">
                <img src="LU UNI.png" alt="" class="logo1">
                <h1 class="h11">Sessions Of Lebanese University</h1>
            </div>
            <h3>Dears Users , this is set of Lebanese University Sessions</h3>
            <div class="p2">
            <p class="p2">
                When you select a specific academic year and semester for a specific subject,
                click here to view the results :
            </p></div>
            <form action="" method="post">
                <input type="submit" value="Here >" id="button" name="send">
                <?php 
                if(isset($_POST['send'])){
                if(!isset($_SESSION['username'])) {
                
                echo 
                    '<p class="log"> <span> Warning: You must be logged in.</span> Please log in </p> 
                    <a href="../Sign Up/signup.php" class="a"> Signup </a><p class="log"> or</p> 
                    <a href="../Login/login.php" class="a">Login ...</a>';
        }}
    ?>
        </div>
        <div class="small">
            <form action="" method="post">
                <div class="custom-select">
                <select name="year" id="year" required>
                    <option value="">Choose The Year</option>
                    <option value="First Year">First Year</option>
                    <option value="Second Year">Second Year</option>
                    <option value="Third Year">Third Year</option>
                </select>
                </div>
                <select name="semester" id="semester" required>
                    <option value="">Choose The semester</option>
                    <option value="First semester">First semester</option>
                    <option value="Second semester">Second semester</option>
                </select>
                <input type="text" name="code" id="code" placeholder="The material you want..." required>
            </form>
        </div>
    </section>
</form>
    <script src="SessionsOfLebaneseUniversity.js"></script>
</body>
</html>