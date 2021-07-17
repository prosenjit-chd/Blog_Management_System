<?php
session_start();//session will be start......

//initialize some variales............
    $username = "";
    $email ="";
    $errors = array();

//connect to the database.............
    $conn = mysqli_connect("localhost","root","","blog");
    if(!$conn){
        die("Sever Connection Failed".mysqli_connect_error);
    }
  
//register process.............
    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['repassword']);
    
        if(empty($username)){
            array_push($errors,"User Name is required.. ");
        }
        if(empty($email)){
            array_push($errors,"Email is required.. ");
        }
        if(empty($password)){
            array_push($errors,"Password is required.. ");
        }
        if($password != $password_1){
            array_push($errors,"Password and Re-Password doesn't match.. ");
        }

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) !=0){
            array_push($errors,"User Name already exist..");
        }
        if(count($errors) == 0){
            $hash_password = md5($password);
            $sql = "INSERT INTO users (username, email, password) 
                    VALUES ('$username','$email','$hash_password')";
            mysqli_query($conn,$sql);

            $_SESSION['username']= $username;
            

        }
    }

//login process.................
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        if(empty($username)){
            array_push($errors,"User Name is required.. ");
        }
        
        if(empty($password)){
            array_push($errors,"Password is required.. ");
        }
        
        if(count($errors) == 0){
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 1){
                while($row = mysqli_fetch_assoc($result)){
                    if($row['block'] != 0){
                        array_push($errors, "User can't login because user in  block-list! :(");
                    }else{
                        $_SESSION['username']= $username;
                        $_SESSION['success']="You are successfully logged in";
                        header('location: index.php');
                    }
                }
                
            }else{
                array_push($errors, "Wrong Username and Password combination");
            }
        }
    }

//logout process.........................
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

//Update post............................
    if(isset($_POST['postUpdate_submit'])){
        $title = mysqli_real_escape_string($conn, $_POST['post_title']);
        $content = mysqli_real_escape_string($conn, $_POST['post_content']);
        $username = $_POST['username'];
        $ID = $_POST['ID'];

        date_default_timezone_set('Asia/Dhaka');
        $date=date('F-j, Y');

        if(empty($title)){
            array_push($errors,"Title can't be empty..! ");
        }
        if(empty($content)){
            array_push($errors,"Content can't be empty..! ");
        }
        if(count($errors) == 0){
            echo $ID .$title. $content .$date. $username;
            
            $sql = "UPDATE `posts` 
                    SET `post_title`= \"$title\",`post_content`=\"$content\",`post_date`=\"$date\" 
                    WHERE ID=\"$ID\"";

            mysqli_query($conn,$sql);            

            $_SESSION['success']="Post update successful...";
            header('location: index.php?p='.$ID);
        }

    }

//Comment Insert.....................
    if(isset($_POST['comment_submit'])){
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);

        date_default_timezone_set('Asia/Dhaka');
        $commentDate=date('F-j, Y');

        $commentUsername = $_POST['username'];
        $postid = $_POST['postid'];
        
        if(empty($comment)){
            array_push($errors,"Comment can't be empty..! ");
        }
        if(count($errors) == 0){
            echo $comment. $commentDate. $commentUsername .$postid;
            $sql = "INSERT INTO `comments`(`comment`, `comment_date`, `username`, `postid`) 
                    VALUES ('$comment','$commentDate','$commentUsername','$postid')";

            mysqli_query($conn,$sql);            

            $_SESSION['success']="Comment successful...";
            header('location: index.php?p='.$postid);
        }
        
    }
?>