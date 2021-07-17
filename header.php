<?php
include('server.php');
$log="";
if(isset($_SESSION['username'])){
    $log ="<a href='index.php?logout=1'>LogOut</a>";
    // include('post_manage.php');
}else{
    $log= "<a href='login.php'>LogIn</a>";
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <header class="container">
        <nav>
            <ul >
                <li><a href="index.php" id="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="newblog.php">Add New Blog</a></li>
                <li>
                <?php
                    echo $log;
                ?>
                </li>
            </ul>
        </nav>
    </header>