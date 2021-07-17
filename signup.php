<?php

    require 'header.php';

?>
    <div class="wrapper">
      <div class="container">
        <div class="header">
          <h1 id="from-header">Registration</h1>
        </div>
        <div class="content">
          <form action="signup.php" method="post">
            
            <div class="single-from">
              <?php include 'error.php' ?>
            </div>
            <div class="single-from flex space_bwtn">
              <label for="name">User Name</label>
              <input type="text" name="username" value="<?php echo $username ?>"/>
            </div>
            <div class="single-from flex space_bwtn">
              <label for="email">Email</label>
              <input type="text" name="email" value="<?php echo $email ?>"/>
            </div>
            <div class="single-from flex space_bwtn">
              <label for="password">Password</label>
              <input type="password" name="password" />
            </div>
            <div class="single-from flex space_bwtn">
              <label for="repassword">Re-Type Password</label>
              <input type="password" name="repassword" />
            </div>
            <div class="single-from flex space_bwtn right">
              <button type="submit" name="register" class="btn">Register</button>
            </div>
            <div >
              <p>Already have account? <a href="login.php">LogIn</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>


<?php
    require 'footer.php';
?>