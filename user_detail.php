<?php
    $postid = $post['ID'];

    $sql = "SELECT * FROM posts WHERE ID = '$postid'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $username = $row['post_username'];
        
        $sql="SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            $user = $row['username'];
            
        }
      
    }
    

?>


<div class="flex">
    <p class="Pacifico"> Posted by : <h1>  <?php echo $user?> </h1></p>
    <p class="Lemonada" id="desg"> <subscript>  <?php echo $row['designation'];?></subscript></p>
</div>
