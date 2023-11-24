<link rel="stylesheet" href="css/main.css">

<?php
      
$title = "Login";
require("header.php");

?>
  <div class="login-box">
  <h2>Login</h2>

  <form action="backend/controller.php" method="POST">
    <div class="user-box">
      <input type="text" name="tag" id="tag">
      <label>User Tag</label>
    </div>

    <div class="user-box">
      <p>Or use our other way to log in. ↓</p>
    </div>

    <div class="user-box">
      <input type="text" name="username"  id="username">
      <label>Username</label>
    </div>

    <div class="user-box">
      <input type="password" name="password"  id="password">
      <input type="hidden" name="formType" value="login">
      <label>Password</label>
    </div>

    <input class="loginbutton" type="submit" value="login">
  </form>
      <p></p>
      <p>Copyright Joep en de niet Joepen <?= date('Y-m');?></p>
</div>

  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->


    
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>