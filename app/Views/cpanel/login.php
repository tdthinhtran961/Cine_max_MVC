<link rel="stylesheet" href="<?php echo BASE_URL?>/public/template/css/login.css" />
<div class="wrapper">
   <div class="title">
      Login
   </div>
   <div>
      <span style="display: block;">
      <!-- id: thinhadmin2 -->
   </span>
      <span style="display: block;">
      <!-- password: thinh123 -->
   </span>
   </div>
   <form action="<?php echo BASE_URL ?>/login/authentication_login" method="POST">
      <div class="field">
         <input type="text" name="username" required>
         <label>Username</label>
      </div>
      <div class="field">
         <input type="password" name="password" required>
         <label>Password</label>
      </div>
      <!-- <div class="content">
         <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
         </div>
         <div class="pass-link">
            <a href="#">Forgot password?</a>
         </div>
      </div> -->
      <div class="field">
         <input type="submit" name='login' value="Login">
      </div>
      <!-- <div class="signup-link">
         Not a member? <a href="#">Signup now</a>
      </div> -->
   </form>
</div>
<?php 
   if (isset($msg)) {
      echo '<span>'.$msg.'</span>';
   }
?>