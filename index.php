<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>RailYatri</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

a:link{color:white; text-decoration:none;}
a:hover{color:#FFA07A ;text-decoration:none;}
a:visited{color:#FFA07A ;text-decoration:none;}

.button {
  display: inline-block;
  background-color:#111;
  font-family:"Lato" sans serif;
  border: none;
  color: #000;
  text-align: center;
  font-size: 27px;
  padding: 15px;
  width: 200px;
letter-spacing:8px;
transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  color: #FFA07A;
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 15px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


input[type=text], select {
    width: 100%;
    padding: 12px 70px;
    margin: 8px 0;
    display: inline-block;
    border: none;
    background-color: #f1f1f1;
    border-radius: 4px;
    text-transform: uppercase;
    box-sizing: border-box;
    text-align: center;
}


input[type=password], select {
    width: 100%;
    padding: 12px 70px;
    margin: 8px 0;
    background-color: #f1f1f1;
    display: inline-block;
    border: none;
    border-radius: 4px;
    box-sizing: border-box;
    text-align: center;
}
input[type=date], select {
    width: 100%;
    padding: 12px 70px;
    margin: 8px 0;
    background-color: #f1f1f1;
    display: inline-block;
    border: none;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #f1f1f1;
    text-align: center;
}


input[type=button] {
  width: 30%;
    background-color: #1e90ff;
    color: white;
    padding: 10px ;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
}


input[type=button]:hover {
    background-color: #45a049;
}
input[type=submit] {
  width: 50%;
    background-color: #1e90ff;
    color: white;
    padding: 10px ;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
}


input[type=submit]:hover {
    background-color: #45a049;
}



.flip-card {
  top: 30px;
  left:100px;
  float:left;
  border-radius: 5px;
    padding: 10px 10px 10px 10px;
    background-color: transparent;
    width: 425px;
    height: 525px;
    perspective: 1000px;
}

.flip-card-inner {
  top: 30px;
  left:100px;
  float:left;
  border-radius: 5px;
    padding: 10px 10px 10px 10px;
  position: relative;
  width: 425px;
 height: 525px;
  border-radius: 5px;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
  border-radius: 5px;
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 425px;
 height: 525px;
  border-radius: 5px;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  border-radius: 5px;
  z-index: 2;
}

.flip-card-back {
  background-color: white;
  transform: rotateY(180deg);
  z-index: 1;
  border-radius: 5px;
}

</style>
  </head>
  <body background="image1.jpg" style="position: relative;
  background-size:cover;
  background-position: center;
  background-attachment:fixed;
  font-weight: 400;
  max-height: 600px;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;background:transparent;" id="navbar ">
  <a class="navbar-brand" href="#" style="font-size: 1.5vw;"><b><h5>RailYatri</h5></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="font-size: 1.5vw;"><h6>Home</h6> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>Trains</h6></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>User choice</h6></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>Login</h6></a>
      </li>
      </ul>
        <a class="nav-link" href="signup.php" style="font-size: 1.5vw;"><h6>Sign Up</h6></a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="font-size: 1.5vw;"><h6>Travel Safe without regrets !</h6></a>
      
  </div>
</nav>
<div class="ptext1">
    <span class="border"><b>RAILWAY RESERVATION PORTAL</b></span>
<div class="ptext2">&nbsp&nbsp&nbsp&nbsp
<span style="background-color:#f5deb3;color:#8b4513;padding:20px;align-content: center;opacity: 0.8;"><b>SAFETY</b></span>&nbsp&nbsp<span style="background-color:#f5deb3;color:#8b4513;padding:20px;align-content: center;opacity: 0.8;"><b>SECURITY</b></span>&nbsp&nbsp<span style="background-color:#f5deb3;color:#8b4513;padding:20px;align-content: center;opacity: 0.8;"><b>PUNCTUALITY</b></span>
</div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="avatar3.jpg"  style="width:425px;height: 525px;border-radius: 5px;">
    </div>
    <div class="flip-card-back">

    	<div class="card" style="height: 100%;">
  <div class="card-body">
    <h5 class="card-title">Find Trains</h5>
    <h6 class="card-subtitle mb-2 text-muted">Fill-in the details below !</h6>
    <form action="trains.php" method="POST" name="form1">
  <div class="form-group">
    <label>Date of Travelling : :</label>
    <input  id="date_of_travel" type="date" class="form-control" placeholder="Enter a date" name="date" required="required">
    <small class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Starting From : :</label>
    <input type="text" class="form-control" placeholder="Depatrure Place" name="departure" required="required">
  </div>
  <div class="form-group">
    <label>Ending To : :</label>
    <input type="text" class="form-control" placeholder="Destination Place" name="destination" required="required">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Find</button>
</form>
  </div>
</div>

</div>
</div>
</div>
<!-- <table style="border:none; margin-top:50px;margin-left:50px;letter-spacing: 3px;">
<form action="trains.php" method="POST" name="form1">
<tr>
  <td><img src="logo.png" style="float: left;"><center><FONT COLOR="BLACK" SIZE=5 FACE="calibri" ><B>

  <FONT COLOR="#79ff6"FACE="calibri" SIZE=6 ><B>&nbsp&nbspF<FONT COLOR="#1e90ff" FACE="calibri" SIZE=6 >i<FONT COLOR="#88edff"FACE="calibri" SIZE=6 >n<FONT COLOR="#ff88b2"FACE="calibri" SIZE=6 >d<FONT COLOR="#9e8fff"FACE="calibri" SIZE=6 > t<FONT COLOR="#0b0052"FACE="calibri" SIZE=6>r<FONT COLOR="#79ff6"FACE="calibri" SIZE=6 >a<FONT COLOR="#1e90ff" FACE="calibri" SIZE=6 >i<FONT COLOR="#88edff"FACE="calibri" SIZE=6 >n<FONT COLOR="#ff88b2"FACE="calibri" SIZE=6 >s<FONT COLOR="#0b0052"FACE="calibri" SIZE=6>?</B></FONT>

</center></td>
</tr>
<tr>
<td><center><FONT COLOR="BLACK" SIZE=4 FACE="calibri"><b><br>Date of Traveling :</center></td></tr><tr>
<td><center><input type="date" placeholder="Travel Date" name="date"  required="required"></center></td></tr><tr>
</tr>
<tr>
<td><FONT COLOR="BLACK" SIZE=4 FACE="calibri" ><B>Starting From :</td></tr>
  <tr>
<td><center><input type="text" placeholder="Departure Place" name="departure" required="required" ></center></td>
</tr>
<tr>
<td><center><FONT COLOR="BLACK" SIZE=4 FACE="calibri"><b>Ending To :</center></td></tr><tr>
<td><center><input type="text" placeholder="Destination Place" name="destination" required="required" onclick="validate_date(document.form1.date1)"></center></td></tr><tr>
</tr>


</table><br><center>
<input type="submit" value="FIND" ></center>
</form> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>










