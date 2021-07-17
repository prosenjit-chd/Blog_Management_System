<?php

    require 'header.php';
    require_once('includes/class-query.php');
    
    $postid = "";
    $cat = "";
    if(!empty($_GET)){
        if(!empty($_GET['p'])){
            $postid = $_GET['p'];
        }
        elseif(!empty($_GET['cat'])){
            $cat = $_GET['cat'];
        }
        
    
    }
    if(empty($postid) && empty($cat)){
        $posts_array = $query->all_posts();
        $class_post ="post";
    }elseif(!empty($postid)){
        $posts_array = $query->post($postid);
    }elseif(!empty($cat)){
            echo 'cat';
    }
    
?> 

<div class="wrapper">
    <div class="container">
        <div class="content">
            <?php if(isset($_SESSION['success'])):?>
                <div class="error success">
                    <h3>
                        <?php
                            echo $_SESSION['username'].', '.$_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <?php if(isset($_SESSION['username'])):?>
                <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
            <?php endif ?>
        </div>
    </div>
    <?php foreach($posts_array as $post):?>
    <div class="container dark">
        <div class="">
            <div class="dark ">
                <div class="flex space_bwtn">
                    <div>
                        <?php include 'user_detail.php' ?>
                    </div>
                    <div class="flex">
                        <p class="Pacifico"> Published On: <div class="Montserrat"><?php echo $post['post_date'];?></div></p>
                    </div>
                </div>
                
            </div>
            
            <div class=" <?php echo $class_post;?>">
                <h1 class="liht_dark"><a href="?p=<?php echo $post['ID'];?>"> <?php echo $post['post_title']; ?></a></h1>
                <p class="padding"> <?php echo $post['post_content']; ?> </p>
            </div>
        </div>
        <!-- <?php if(isset($class_post)):?>
            <a href="?p=<?php echo $post['ID'];?>"class='btn right'>Read More</a>
        <?php endif?> -->
        <div class="flex space_bwtn">
            <div>
                <?php
                    if(isset($_SESSION['username'])){
                        
                        if($user == $_SESSION['username']){
                            include('post_manage.php');
                        }
                        
                    }
                ?>
            </div>
            <div>
                <?php if(isset($class_post)):?>
                    <a href="?p=<?php echo $post['ID'];?>"class='btn'>Read More</a>
                <?php endif?>   
            </div>
        </div>
        
        
    </div>
    <br>
    <?php endforeach;?>


<?php
    require 'comment.php';
?>
</div>
<br>
<?php
    require 'footer.php';
?>