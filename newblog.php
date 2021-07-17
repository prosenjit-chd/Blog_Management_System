<?php

    require 'header.php';

    error_reporting(E_ALL);
    ini_set('display_error','1');

    if(!isset($_POST)){
        $post_title = mysqli_real_escape_string($conn, $_POST['post_title']);
        $post_content = mysqli_real_escape_string($conn, $_POST['post_content']);
        
            if(empty($post_title)){
                array_push($errors,"User Name is required.. ");
            }
            if(empty($post_content)){
                array_push($errors,"Password is required.. ");
            }
            if(count($errors) == 0){
                require_once('includes/class-insert.php'); 
                if($insert->post($_POST)){
                    $_SESSION['success'] = "Blog is successfully posted..";
                }
            }
            
    }

?>

<?php if(isset($_SESSION['username'])):?>
    <div class="container">
        <div class="content">
            <div class="header">
                <h1 id="from-header">Create a new blog..</h1>
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
                <div class="single-from flex space_bwtn">
                    <label for="post_title">Title :</label>
                    <input type="text" name="post_title" value="<?php ;?>"/>
                </div>
                <div class="single-from flex space_bwtn">
                    <label for="post_content">Content :</label>
                    <textarea name="post_content" rows="5" value="<?php ;?>"></textarea>
                </div>
                <!-- <div class="single-from">
                    <label for="post_category">Cat 1</label>
                    <input type="checkbox" name="post_category[first]" value="cat1">
                    <br>
                    <label for="post_category">Cat 2</label>
                    <input type="checkbox" name="post_category[second]" value="cat2">
                </div> -->
                <div class="single-from flex space_bwtn">
                    <button type="submit" name="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php elseif(!isset($_SESSION['username'])): ?>

    <div class="container">
        <div class="content">
            <p class="error">You have to <i> <a href="login.php">LogIn</a></i> to create post.</p>
        </div>
    </div>       
<?php endif ?>


<?php
    require 'footer.php';
?>
