<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Login !</title>
  </head>
  <body background="image4.jpeg" style="background-size: cover;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;background:transparent;" id="navbar ">
  <a class="navbar-brand" href="#" style="font-size: 1.5vw;"><b><h5>RailYatri</h5></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="font-size: 1.5vw;"><h6>Home</h6></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>Trains</h6></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>User choice</h6></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>Login</h6> <span class="sr-only">(current)</span></a>
      </li>
      </ul>
        <a class="nav-link" href="signup.php" style="font-size: 1.5vw;"><h6>Sign Up</h6></a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="font-size: 1.5vw;"><h6>Travel Safe without regrets !</h6></a>
      
  </div>
</nav>
    
<div class="card" style="width:28rem;top:1vw;left:33vw;">
  <div class="card-body">
    <h5 class="card-title">Login</h5>
    <h6 class="card-subtitle mb-2 text-muted">Please enter your Credentials correctly to book your ticket!</h6>
    <form action="confirm_cust.php" method="POST">
  <div class="form-group">
    <label>Username :</label>
    <input type="text" class="form-control" placeholder="Enter Your Username" name="user" required="required">
    <small class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password :</label>
    <input type="password" class="form-control" placeholder="Password" name="password" required="required">
  </div>
  <div class="form-group">
    <label>Journey Code :</label>
    <input type="text" class="form-control" placeholder="Journey Code of Train" name="jcode" required="required">
  </div>
  <div class="form-group">
    <label>Customer Id :</label>
    <input type="number" class="form-control" placeholder=" Enter Your Customer ID" name="cid" required="required">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="check" required="required" name="date" value="<?php echo $_POST['date'] ?>">
    <label class="form-check-label" for="exampleCheck1">Do You Confirm your Date of Journey as <?php echo $_POST['date'];?>&nbsp?</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Book</button>
</form>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           