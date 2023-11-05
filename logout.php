<?php
 session_start();
 session_unset();
 session_destroy();
 require 'partials/_nav.php';
?>
<div class="container">
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">LOGGED OUT!</h4>
  <p>Your account has been logged out. Please login in for your page Thankyou.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to logged in through<a href="/loginsystem/login.php/"> this link</a></p>
</div>
</div>