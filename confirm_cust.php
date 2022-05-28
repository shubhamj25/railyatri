<?php
$con=new mysqli('localhost','root','sj251298','railyatri');
$user=$_POST['user'];
$pass=$_POST['password'];
$jcode=$_POST['jcode'];
$date=$_POST['date'];
$cust_id=$_POST['cid'];
$result=$con->query("SELECT trains.START,trains.STOP,trains.TRAIN_NAME,trains.DEPARTURE,trains.ARRIVAL,trains.JOURNEY_CODE,trains.FARE,users.Username,users.ID,users.Name,users.Password,customers.Customer_Id,customers.C_Name FROM trains,users,customers WHERE users.Username='$user' AND users.Password='$pass' AND trains.JOURNEY_CODE='$jcode' AND customers.Customer_Id='$cust_id' AND customers.C_Name=users.Name");
if($count=$result->num_rows){

$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
	echo "<!DOCTYPE html><html><head>	<title>TICKET BOOKED</title><link rel=\"stylesheet\" type=\"text/css\" href=\"ticket.css\">";
echo"</head><style>   body, html { height: 100%;     margin-top: 0px;margin-right: 0px;margin-left: 0px}";

echo ".bg {background-color: #ffe1e0;
background-image: url(\"https://www.transparenttextures.com/patterns/inspiration-geometry.png\");}";

echo ".container{ display: block; position: relative; padding-left: 25px; cursor: pointer; user-select: none; text-align: center;}";

echo ".container input { position: absolute; opacity: 0; cursor: pointer; height: 0; width: 0;}";

echo ".checkmark { position: absolute;top: 0;left: 0;height: 25px; width: 25px;  background-color: #eee;}";
echo ".container:hover input ~ .checkmark {background-color: #ccc;}";

echo ".container input:checked ~ .checkmark {background-color: #4CAF50;}";


echo ".checkmark:after {  content: \"\";  position: absolute;  display: none;}";


echo ".container input:checked ~ .checkmark:after {display: block;}";


echo ".container .checkmark:after {left: 9px; top: 5px; width: 5px; height: 10px; border: solid white; border-width: 0 3px 3px 0; -webkit-transform: rotate(45deg); -ms-transform: rotate(45deg);transform: rotate(45deg);}";

echo "</style><body><div class=\"bg\"><br><br><section class=\"section\"><span><img src=\"logo.png\" style=\"float:left;padding-left: 90px;\" ><center><h3 style=\"letter-spacing: 20px;font-size: 30px;top: 50px;\"><b>INDIAN RAILWAYS</b></h3></center></span><p style=\"padding: 0px 150px 0px 150px; text-align: left;\"><font face=\"calibri\" size=\"3\" color=\"black\"><b><br><br>Thank You for using railyatri.com !<br>As per your entered Journey code we have reserved your seat in the train for further payment purpose.<br>Be Safe and enjoy your Journey !<br></b></font> <font face=\"calibri\" size=\"3\" color=\"black\"><b>NOTE: This site would not lead you to direct payment for the ticket instead it would reserve your seat for next 15 days within which you need to pay the ticket amount at the IRCTC office.</b></font>";
   echo" </p><br><center><table class=\"names\"><tr>";
 echo"		<td><b>Passenger Name :</td><td><b><center>",$row['Name'],"</td>";
 echo"   		<td><b>Fare :</td><td><b>Rs.&nbsp",$row['FARE'],"</td>";
 echo"    	</tr>";
  echo"    	<tr>";
 echo"    		<td><b>Passenger Type :</td><td><b>CUSTOMER</td>";
 echo"    		<td><b>Customer Id :</td><td><b>",$row['Customer_Id'],"</td>";
 echo"    	</tr>";
 echo"		<tr>";
 echo"		<td><b>From :</td><td><b><center>",$row['START'],"</td>";
 echo"   		<td><b>To :</td><td><b>",$row['STOP'],"</td>";
 echo"    	</tr>";
 echo"    	<tr>";
 echo"    		<td><b>Train Name :</td><td><b>",$row['TRAIN_NAME'],"</td>";
 echo"    		<td><b>Departure :</td><td><b>",$row['DEPARTURE'],"</td>";
 echo"    	</tr>";
 echo"    	<tr>";
 echo"    		<td><b>Arrival :</td><td><b>",$row['ARRIVAL'],"</td>";
 echo"    		<td><b>Train Number :</td><td><b>",$row['JOURNEY_CODE'],"</td>";
 echo"    	</tr>";
  echo"    	<tr>";
 echo"    		<td colspan=2><b>Date to Travel / Date of departure :</td><td colspan=2><b>",$date,"</td>";
 echo"    	</tr>";
    echo" </table></center>";
echo" </section>";
echo" </body>";
echo" </html>";
$v0=mt_rand(0,999999999);$v1=$row['START'];$v2=$row['STOP'];$v3=$row['TRAIN_NAME'];$v4=$row['DEPARTURE'];$v5=$row['ARRIVAL'];$v6=$row['JOURNEY_CODE'];$v7=$row['ID'];$v8=$user;$v9=$date;$v10=$cust_id;
$res=$con->query("INSERT INTO `bookings_cust`(`BOOKING_ID`, `START`, `STOP`, `TRAIN_NAME`, `DEPARTURE`, `ARRIVAL`, `JOURNEY_CODE`, `ID`, `Username`, `Date of Journey`, `Customer_Id`) VALUES ('$v0','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10')");


echo "<p style=\"padding: 0px 150px 0px 150px; text-align: center;\"><font face=\"calibri\" size=\"3\" color=\"black\"><b>


Please select the preference for your seat which would be considered at the time of payment according to the availability.
<center><table class=\"names2\" style=\"width:50%;border:none;letter-spacing:5px;\"><form>
	<tr style=\"background-color:#fff1f0;\"><td><label class=\"container\"><input type=\"checkbox\"><span class=\"checkmark\"></span><b>Lower</label></td></tr>
		<tr style=\"background-color:#ff928a;\"><td><label class=\"container\"><input type=\"checkbox\"><span class=\"checkmark\"></span><b>Upper</label></td></tr>
			<tr style=\"background-color:#fff1f0;\"><td><label class=\"container\"><input type=\"checkbox\"><span class=\"checkmark\"></span><b>Middle</label></td></tr>
				<tr style=\"background-color:#ff928a;\"><td><label class=\"container\"><input type=\"checkbox\"><span class=\"checkmark\"></span><b>Side Lower</label></td></tr>
					<tr style=\"background-color:#fff1f0;\"><td><label class=\"container\"><input type=\"checkbox\"><span class=\"checkmark\"></span><b>Side Upper</label></td></tr></form></table></center>
					<br><br>			
						
";
}
}
else
{
	echo "<html><body background=\"failure.jpeg\" style=\"background-size:cover;background-position:center;background-attachment:fixed;font-size:35px;\"><br><br><br><br><p style=\"padding: 0px 550px 0px 150px; text-align: center;\"><img src=\"cross.png\"><br><font face=\"calibri\" color=\"white\"><b>

	Sorry for the inconvinience ! You have failed booking the ticket as you were careless in filling the username or password or your Journey Code correctly.To book it again go back to the starting page and do fill your details correctly the next time :)

	</b><br><a href=\"index.php\"><img src=\"back.png\"></a></p></font></body></html>";
}
 ?>
