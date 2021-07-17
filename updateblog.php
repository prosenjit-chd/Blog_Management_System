<?php
    require 'header.php';
    $postid = "";
    $title = "";
    $content = "";
    if(!empty($_GET)){
        $postid= $_GET['pid'];
        $title= $_GET['title'];
        $content= $_GET['content'];

    }

?>
<?php if(isset($_SESSION['username'])):?>
    <div class="container">
        <div class="content">
            <div class="header">
                <h1 id="from-header">Update the blog...</h1>
            </div>
            <hr>
            <form action="newblog.php" method="post">
                <div class="single-from">
                    <?php include 'error.php' ?>
                </div>
                <?php if(isset($_SESSION['success'])):?>
                    <div class="error success">
                        <h3>
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
                <input type="hidden" name="ID" value="<?php echo $postid; ?>">
                <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                <div class="single-from flex space_bwtn">
                    <label for="post_title">Title :</label>
                    <input type="text" name="post_title" value="<?php echo $title;?>"/>
                </div>
                <div class="single-from flex space_bwtn">
                    <label for="post_content">Content :</label>
                    <textarea name="post_content" rows="5" value="<?php echo $content ;?>"></textarea>
                </div>
                <div class="single-from flex space_bwtn">
                    <button type="submit" name="postUpdate_submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php elseif(!isset($_SESSION['username'])): ?>

    <div class="container">
        <div class="content">
            <p class="error">You have to <a href="login.php">LogIn</a> to create post.</p>
        </div>
    </div>       
<?php endif ?>


<?php
     require 'footer.php';
?>
