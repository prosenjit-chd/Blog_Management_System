<?php

    require 'header.php';

?>
    <div class="wrapper">
      <div class="container">
        <div class="header">
            <h1 id="from-header">LOG IN</h1>
        </div>
        <div class="content">
          <form action="login.php" method="post">
              
              <div class="single-from">
                <?php include 'error.php' ?>
              </div>
            <div class="single-from flex space_bwtn">
              <label for="name">User Name</label>
              <input type="text" name="username" value="<?php echo $username ?>"/>
            </div>
            <div class="single-from flex space_bwtn">
              <label for="password">Password</label>
              <input type="password" name="password"/>
            </div>
            <div class="single-from flex space_bwtn right">
              <button type="submit" name="login" class="btn">Log In</button>
            </div>
            <div >
              <p>Don't have account? <a href="signup.php">Sign Up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php
    require 'footer.php';
?>