<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
  

<div class="container mb-5">
  <section>
    <div class="container-fluid"> </div>
    <h1 class="text-center text-centralize pt-5" >Contact Us</h1>
    <hr class="w-25 mx-auto pt-5">
  </section>
  <div class="w-50 mx-auto">
    <center><form method="POST" action="unserinfo.php">
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="Name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="Email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="NumberM">Mobile Number</label>
      <input type="Number" class="form-control" id="NumberM"  name="NumberM">
    </div>
    <div class="form-group">
      <label> Textarea</label>
      <textarea class="form-control" name="textarea"></textarea>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" href="index.php">Send</button>
  </form></center>
   
</div>
</header>

</body>
</html>
