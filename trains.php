<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style1.css">
 <style>
.button {
  display: inline-block;
  background-color:#111;
  font-family:"Lato" sans serif;
  border: none;
  color: #000;
  text-align: center;
  font-size: 27px;
  padding: 15px;
  width: 400px;
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

.container{
  display: block;
  position: relative;
  padding-left: 25px;
  cursor: pointer;
  font-size: 20px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: center;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #4CAF50;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
a:link{color:white; text-decoration:none;}
a:hover{color:#FFA07A ;text-decoration:none;}
a:visited{color:#FFA07A ;text-decoration:none;}
input[type=submit] {
  width: 30%;
    background-color: #1e90ff;
    color: white;
    padding: 7px ;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 20px;
}
input[type=submit]:hover {
    background-color: #45a049;
}

body {
  background-position: relative;
  background-attachment: fixed;
  background-size: cover;
}

.trans{
  background: rgb(0,0,0);
  background:rgba(0,0,0,0.7);
  background-size: cover;
}
table {
    width:98%;
}
table, th, td {
    border:none;
    border-collapse: collapse;
    font-family: "calibri";
    font-size: 22px;
}
th {
  padding: 5px;
    text-align: left;
    font-size: 22px;
    font-family: "calibri";
}
td {
    padding: 5px;
    text-align: left;
    font-family: "calibri";font-size: 20px;
}
table.names tr:nth-child(even) {
    background-color: #eee;
}
table.names tr:nth-child(odd) {
   background-color:#fff;
}
table.names th {
    background-color: black;
    color: white
}
</style>
    <title>RailYatri</title>
  </head>
  <body background="limg.jpeg">
    
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
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>Trains</h6><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>User choice</h6></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 1.5vw;"><h6>Login</h6> </a>
      </li>
      </ul>
        <a class="nav-link" href="signup.php" style="font-size: 1.5vw;"><h6>Sign Up</h6></a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="font-size: 1.5vw;"><h6>Travel Safe without regrets !</h6></a>
      </div>
</nav>
<br>
  <section class="section">
    <span><img src="logo.png" style="float: left;"><center><h1 style="letter-spacing: 30px;font-size: 30px;top: 50px;"><b>INDIAN RAILWAYS</b></h1></center></span>
    <p style="padding: 0px 150px 0px 150px; text-align: center;"><font face="calibri" size="5px" color="white"><b>
      Welcome To www.railyatri.com!<br>From the details you entered we hereby inlist the various trains which are suitable for your journey.
      You are allowed to select a train and reserve a seat as per the availability norms.<br></b></font>
      <font face="calibri" size="5px" color="black"><b>NOTE: 1.This site would not lead you to direct payment for the ticket instead it would reserve your seat for next 15 days within which 
      you need to pay the ticket amount at the IRCTC office.</b><br><b>2. Do remember the Journey Code for the Train otherwise you might not be able to book the ticket :|</b></font>
    </p>
  </section>
  <br><br>
<center>
<iframe src="ft.php"></iframe>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
