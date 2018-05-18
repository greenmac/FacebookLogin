<?php
  require_once "config.php";

  $redirectURL = "http://localhost/FacebookLogin/fb-callback.php";
?>
<!DOCTYPE html>
<html lang="zh" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container" style="margin-top:100px">
      <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <img src="images/logo.png"><br><br>
            <form action="">
                <input name="email" placeholder="Email" class="form-control"><br>
                <input name="password" type="password" placeholder="Password" class="form-control"><br>
                <input type="submit" value="Log In" class="btn btn-primary">
                <input type="button" value="Log In With Facebook" class="btn btn-primary">
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
