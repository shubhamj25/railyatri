<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
    <title>RailYatri</title>
  </head>
  <body background="signup.jpg" style="background-size: cover;height: 100%;"> 

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
      <li class="nav-item active">
        <a class="nav-link" href="signup.php" style="font-size: 1.5vw;"><h6>Sign Up</h6> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="font-size: 1.5vw;"><h6>Travel Safe without regrets !</h6></a>
      </li>
    </ul>
  </div>
</nav>

<div class="card" style="width: 38rem;top:2vw;left:26.5vw;margin-bottom:2vw; ">
  <div class="card-body">
    <h5 class="card-title">Sign Up</h5>
    <h6 class="card-subtitle mb-2 text-muted">Please Enter the following details !</h6>

    <form action="signup-2.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required="required">
    </div>
    <div class="form-group col-md-6">
      <label>User Id</label>
      <input type="number" class="form-control"  placeholder="Enter a User Id" name="userid" required="required">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Username</label>
    <input type="text" class="form-control"  placeholder="Enter a Username" name="uname" required="required">
  </div>
  <div class="form-group col-md-6">
    <label>Password</label>
    <input type="password" class="form-control"  placeholder="Enter a Password" name="pass" required="required">
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Age</label>
      <input type="text" class="form-control" placeholder="Enter Your Age" name="age" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">User Type</label>
      <select id="inputState" class="form-control" name="usertype" required="required">
        <option selected>Customer</option>
        <option>Employee</option>
      </select>
    </div>
  </div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label>Mobile 1</label>
      <input type="number" class="form-control" placeholder="Enter Your Mobile No." name="mob1" required="required">
    </div>
    <div class="form-group col-md-6">
       <label>Mobile 2</label>
      <input type="number" class="form-control" placeholder="(Optional)" name="mob2" >
    </div>
</div>


  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
      <label class="form-check-label" for="gridCheck">
        I have filled the details correctly
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Next >></button>
</form>
  </div>
</div>



    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>