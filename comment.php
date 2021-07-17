<?php
 $postid = $post['ID'];

    $comment_arry = array();
    $sql = "SELECT * FROM `comments` WHERE postid = $postid ORDER BY `comments`.`cid`  DESC";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($rows = mysqli_fetch_assoc($result)){
            $comment_arry[] = $rows;
        }
        
                  
    }else{
        array_push($errors, "No comment found..!");
    }

?>

<?php if(!empty($_GET['p'])):?>
    <div class="container">
        <div class="header">
            <h1 id="from-header">Comment</h1>
        </div>
        <div class="content">
            <?php if(!isset($_SESSION['username'])):?>
                <div class="error">
                    <h3>
                        You can't comment unless you have an account!! :(
                        <hr>
                    </h3>
                </div>
            <?php else: ?>
                <div class="content flex">
                    <form action="server.php" method="post">
                        <div class="single-from">
                            <?php include 'error.php' ?>
                        </div>
                        <input type="hidden" name="postid" value="<?php echo $postid;?>">
                        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">
                        <div class="single-from ">
                            <input type="text" name="comment" hint="Comment">
                        </div>
                        <div class="single-from">
                            <button type="submit" name="comment_submit" class="margin_auto btn ">Comment</button>
                        </div>
                    </form>
                </div>
                
            <?php endif ?>
        <?php foreach($comment_arry as $comment):?>
            <?php $comment['cid']; ?>
            <div class="post flex liht_dark" id="comment">
                <div class="comment_box flex flex_center space_bwtn">
                    <div class="comment_user text_center" id="small_box"> 
                        <h2> <?php echo $comment['username'];?></h2>
                        <p class="comment_date right"> <?php echo $comment['comment_date'];?></p>
                        
                    </div>
                    <hr class="hr_hr">
                    <div class="comment_comment">
                        <div class="comment_comment_left">
                            <h4 class="margin_auto"> <?php echo $comment['comment'];?></h4>
                        </div>
                        <div class="comment_comment_right">
                            
                            <?php
                                if(isset($_SESSION['username'])){
                                    
                                    if($comment['username'] == $_SESSION['username']){
                                        include('comment_manage.php');
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
       <?php endforeach ?>
    </div>
<?php endif ?>