<?php
    $postid = $post['ID'];


    $title = $post['post_title'];
    $content = $post['post_content'];

    
?>

<div class="">
    <p> <a href="updateblog.php?pid=<?php echo $postid.'&title='. $title.'&content='.$content;?> " class="btn">Edit</a> - 
    <a href= "delete.php?pid=<?php echo $postid;?>" class="btn">Delete</a></p>
    
</div>