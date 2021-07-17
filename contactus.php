<?php

    require 'header.php';

?>

      
<?php if(isset($_SESSION['username'])):?>
<div class="container">
        <div class="header">
            <h1 id="from-header">Provide feedback and helping us to provide batter service</h1>
        </div>
        <hr>
        <div class="content">
            <form action="server.php" method="post">
                
                <div class="single-from">
                    <?php include 'error.php' ?>
                </div>
                <div class="single-from flex space_bwtn">
                    <label for="feedback">Write Something</label>
                
                    <textarea name="feedback" cols="45" rows="5"></textarea>
                </div>
                <div class="single-from flex">
                    <button type="submit" name="feedback-submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
        
    
</div>
<?php endif ?>
<?php if(!isset($_SESSION['username'])):?>
<div class="container">
    <div class="content">
        <p class="error">You have to <a href="login.php">LogIn</a> for giving feedback.</p>
    </div>
</div>       
<?php endif ?>


<?php
require 'footer.php';
?>
