<?php 
    include_once '../privatePhp/conn.php';
    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_POST['send'])){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['FullName'];
        $username =  $_POST['UserName'];
        $email =  $_POST['email'];
        $password =  $_POST['password'];

        $error = [];


        if((empty($fullname)) && (empty($username)) && (empty($email)) && (empty($password))){
            $errors[] = 'all inputs  is required';
            header("location:editProfile.php");
            exit;
        } 

        if(!isset($errors))
        {
            $currentFullName=$_SESSION['Fullname'];
            $sql="UPDATE `signup` SET `FullName`='$fullname', `UserName`='$username', `Email`='$email',`Password`='$password'
            WHERE `FullName`='$currentFullName'";
            mysqli_query($conn,$sql);
            header('location:../folderhomepageaftersignup/welcomHome.php');
            $_SESSION['Fullname']=$fullname;
        
        }
    
    
    
    }}

?>

<?php 
            $currentFullName=$_SESSION['Fullname'];
            $sql="SELECT * FROM signup WHERE FullName='$currentFullName'";
            $result=mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
        
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="editProfile.css">
    <link rel="icon" type="image/png" href="book_13171152-removebg-preview.png"/>
    <title>Edit Profile</title>
</head>
<body>
    <div class="contnair">
        <h2>Edit Profile</h2>
        <form action="" method="post">
        <ul id="errors"><?php
                    if(isset($errors)){
                        foreach ($errors as $error) {
                            echo '<li>' . $error . '</li>';
                        }
                    }
                ?></ul>
        	<div class="inputBox">
            <p>Full Name:</p>
            <input type="text" name="FullName" id="fullname" value="<?php echo $row['FullName']; ?>">
            </div>
            <div class="inputBox">
            <p>User Name:</p>
            <input type="text" name="UserName" id="username" value="<?php echo $row['UserName']; ?>">
            </div>
            <div class="inputBox">
            	<p>Email:</p>
            	<input type="text" name="email" id="email" value="<?php echo $row['Email']; ?>" >
            </div>
            <div class="inputBox">
            	<p>Password:</p>
            	<div style="width:100%;position:relative">
 	           <input id="pass" type="password" name="password" value="<?php echo $row['Password']; ?>" >
            	<div id="eyeIcon">
            		<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.99902 3L20.999 21M9.8433 9.91364C9.32066 10.4536 8.99902 11.1892 8.99902 12C8.99902 13.6569 10.3422 15 11.999 15C12.8215 15 13.5667 14.669 14.1086 14.133M6.49902 6.64715C4.59972 7.90034 3.15305 9.78394 2.45703 12C3.73128 16.0571 7.52159 19 11.9992 19C13.9881 19 15.8414 18.4194 17.3988 17.4184M10.999 5.04939C11.328 5.01673 11.6617 5 11.9992 5C16.4769 5 20.2672 7.94291 21.5414 12C21.2607 12.894 20.8577 13.7338 20.3522 14.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
         	   </div>
         	   </div>
            </div>
            <div>
            	<input type="submit" id="send" name="send" value="Update">
            	<button id="cancel">Cancel</button>
            </div>
        </form>
    </div>
    <script src="editProfile.js"></script>
</body>
</html>