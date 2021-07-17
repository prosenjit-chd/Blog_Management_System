<?php
require_once 'server.php';
$postid = "";
$cid = "";

    if(!empty($_GET)){
        if(!empty($_GET['pid'])){
            $postid = $_GET['pid'];
        }
        elseif(!empty($_GET['cid'])){
            $cid = $_GET['cid'];
            echo $cid;
        }
        if(!empty($postid)){
            $sql = "DELETE FROM posts
            WHERE ID = '$postid'";
        }
        if(!empty($cid)){
            $sql = "DELETE FROM comments
            WHERE cid = '$cid'";
        }
        if(count($errors) == 0){
            if (mysqli_query($conn,$sql) === TRUE) {
                array_push($errors,"Record deleted successfully");
                header('location: index.php');
            } else {
                array_push($errors,"Error deleting record") ;
                header('location: index.php');
            }
        }
    }
    


?>