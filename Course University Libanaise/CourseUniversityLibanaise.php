<?php 
    include_once ('../privatePhp/conn.php');
    if(!isset($_SESSION)){
        session_start();
    } 
    if(isset($_POST['send'])){
        $year=$_POST['year'];
        $code=$_POST['code'];
        $chapter=$_POST['chap'];
        $sems=$_POST['semester'];

        if(isset($_SESSION['username'])){
        $sql="SELECT * FROM `cours` WHERE year='$year'
        AND code='$code'AND chapter='$chapter' AND semester='$sems'";
        $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $num_rows = mysqli_num_rows($result);
                if($num_rows != 0){
                    $_SESSION['year']=$row['year'];
                    $_SESSION['code']=$row['code'];
                    $_SESSION['chap']=$row['chapter'];
                    $_SESSION['sems']=$row['semester'];
                    $_SESSION['dct']=$row['dct'];
                    $_SESSION['index']=$row['indexx'];
                    header('location:../courseUniversityLibanaise2/courseUniversityLibanaise2.php');
                }
                else{
                    header('location:../pageError/errorPage.php');
                    $_SESSION['courseUniver']='course';
                }
                

                $sql="SELECT * FROM `td` WHERE year='$year'
                AND code='$code'AND chapter='$chapter' AND semester='$sems'";
                $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                        $num_rows = mysqli_num_rows($result);
                        if($num_rows != 0){
                            $_SESSION['year']=$row['year'];
                            $_SESSION['code']=$row['code'];
                            $_SESSION['chap']=$row['chapter'];
                            $_SESSION['sems']=$row['semester'];
                            $_SESSION['dct']=$row['dct'];
                            $_SESSION['index']=$row['indexx'];
                            header('location:../courseUniversityLibanaise2/courseUniversityLibanaise2.php');
                        }
                        else{
                            header('location:../pageError/errorPage.php');
                        }
                    }}
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
    <link rel="stylesheet" href="CourseUniversityLibanaise.css">
    <title>Course University Lebanese</title>
    <style>
        #chap{
    background-color: #f9f9f9;
    border: 1px solid #dddddd;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    color: #000;
    width: 160px;
    font-family:"Comic Sans MS", sans-serif;
    position: relative;
    top: 75px;
    left: 10%;
}
#send{
    border: none;
    width: 100px;
    height: 50px;
    background-color: #181717;
    position: relative;
    top: 150px;
    left: 45%;
    border-radius: 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #fff;
    cursor: pointer;
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
                <h1 class="h11">Courses Lebanese University</h1>
            </div>
            <h3>Discover a World of programing with Lebanese University Courses</h3>
            <div class="p2">
            <p class="p2">
                When you select a specific academic year and semester for a specific subject,
                click here to view the results :
            </p></div>
            <form action="" method="post">
            <input type="submit" name="send" value="Here >" id="send">
            <?php 
                if(isset($_POST['send'])){
                if(!isset($_SESSION['username'])) {
                
                echo 
                    '<p class="log"> Please log in </p> 
                    <a href="../Sign Up/signup.php" class="a"> Signup </a><p class="log"> or</p> 
                    <a href="../Login/login.php" class="a">Login ...</a>';
        }}
    ?>
        </div>
        <div class="small">
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
                <input type="text" name="code" id="material" placeholder="Give me code material..." required>
                <input type="text" name="chap" id="chap" placeholder="Give me The Chapitre ..." required>
            </form>
        </div>
    </section>
    <script src="CourseUniversityLibanaise.js"></script>
</body>
</html>