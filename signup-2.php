<?php
$con=new mysqli('localhost','root','sj251298','railyatri');
$name=$_POST['name'];
$userid=$_POST['userid'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$usertype=$_POST['usertype'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$result=$con->query("INSERT INTO `users`(`ID`, `Username`, `Name`, `Password`, `Age`) VALUES ('$userid','$uname','$name','$pass','$age')");
if($mob1!=NULL){
$query1=$con->query("INSERT INTO `phone_no`(`ID`, `Phone_no`) VALUES ('$userid','$mob1')");	
}
if($mob2!=NULL){
$query1=$con->query("INSERT INTO `phone_no`(`ID`, `Phone_no`) VALUES ('$userid','$mob2')");	
}


if($usertype=='Customer'){
	echo "<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <title>Sign Up</title>
  </head>
  <body background=\"signup.jpg\" style=\"background-size:cover;\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" style=\"width: 100%;background:transparent;\" id=\"navbar \">
  <a class=\"navbar-brand\" href=\"#\" style=\"font-size: 1.5vw;\"><b><h5>RailYatri</h5></b></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"index.php\" style=\"font-size: 1.5vw;\"><h6>Home</h6></a>
      </li>
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"signup.php\" style=\"font-size: 1.5vw;\"><h6>Sign Up</h6> <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\" style=\"font-size: 1.5vw;\"><h6>Travel Safe without regrets !</h6></a>
      </li>
    </ul>
  </div>
</nav>


  <div class=\"card\" style=\"width: 38rem;top:8vw;left:26.5vw;\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Step 2</h5>
    <h6 class=\"card-subtitle mb-2 text-muted\">Fillin the below form and then you are done :) and make sure your Customer Name matches the Name you entered previously in the Name column !</h6>
    <form action=\"signup-3.php\" method=\"POST\">
  <div class=\"form-group\">
    <label>Customer Id</label>
    <input type=\"number\" class=\"form-control\" placeholder=\"Enter a valid Customer Id\" name=\"cid\" required=\"required\">
    <small class=\"form-text text-muted\">We'll never share your details with anyone else.</small>
  </div>
  <div class=\"form-group\">
    <label>Customer Name</label>
    <input type=\"text\" class=\"form-control\" placeholder=\"Customer Name\" name=\"cname\" required=\"required\">
  </div>
  <div class=\"form-group form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" required=\"required\">
    <label class=\"form-check-label\" for=\"exampleCheck1\">I have filled the detais correctly !</label>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
</form>
  </div>
</div>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  </body>
</html>";

}
elseif ($usertype=='Employee') {
	echo "<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <title>Sign Up</title>
  </head>
  <body background=\"signup.jpg\" style=\"background-size:cover;\">
 <div class=\"card\" style=\"width: 38rem;top:3vw;left:26.5vw;\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Step 2</h5>
    <h6 class=\"card-subtitle mb-2 text-muted\">Fillin the below form and then you are done :) and make sure your Customer Name matches the Name you entered previously in the Name column !</h6>

    <form action=\"signup_emp.php\" method=\"POST\">
  <div class=\"form-group\">
    <label>Employee Id</label>
    <input type=\"number\" class=\"form-control\" placeholder=\"Enter a valid Employee Id\" name=\"eid\" required=\"required\">
    <small class=\"form-text text-muted\">We'll never share your details with anyone else.</small>
  </div>
  <div class=\"form-group\">
    <label>Employee Name</label>
    <input type=\"text\" class=\"form-control\" required=\"required\" placeholder=\"Employee Name\" name=\"ename\" >
  </div>
  <div class=\"form-group col-md-\">
      <label >Department Id</label>
      <select class=\"form-control\" name=\"dept\" required=\"required\">
        <option selected>1</option>
        <option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
      </select>
    </div>
  <div class=\"form-group\">
    <label>Salary</label>
    <input type=\"text\" class=\"form-control\" placeholder=\"Salary\" name=\"sal\" required=\"required\">
  </div>
  <div class=\"form-group form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\" required=\"required\">
    <label class=\"form-check-label\" for=\"exampleCheck1\">I have filled the details correctly !</label>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
</form>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
}
else
{
	echo "bye !";
}
  ?>