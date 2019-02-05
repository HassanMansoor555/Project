<?php
$Connection = mysqli_connect("localhost", "root", "","pizza ordering system");
if(!$Connection)
{
	echo "Not connect";
}
if(isset($_POST['Continue']))
{
$Na = $_POST['Name'];
$ph = $_POST['Phone'];
$add = $_POST['Add'];
$Pattern = "/[a-z]|[A-Z]/";
$Pattern2 = "/[0-9]{11}/";
	if(!preg_match($Pattern, $Na))
	{
		echo "<center><b>Invalid Name<b></center><br>";
	}
	else if(!preg_match($Pattern2, $ph))
	{
		echo "<center><b>Invalid Phone Number<b></center><br>";
	}
	else
	{
		$save = "insert into customerinfo(Name, Phoneno, Address) VALUES('$Na','$ph', '$add');";
		$result = mysqli_query($Connection,$save);	
		echo "<a href='Menu.php'>Enter Menu</a>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Pizza Ordering System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel = "stylesheet" type = "text/css" href = "bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
<center><h1>PIZZA 212</h1></center>

<div class = "form_container"> 
<form class = "MyForm" method = "post" action = "index.php">
<center>
<input type = "text" name = "Name" placeholder = "Enter your name">
<input type = "text" name = "Phone" placeholder = "Your Phone Number">
<input type = "text" name = "Add" placeholder = "Your Address">
</center>
<center>
<button type = "submit" name = "Continue">Continue</button>
</center>
</form>  
</div>

<div class="Pic">
  <img class="mySlides" src="images/1.jpg" style="width:100%">
  <img class="mySlides" src="images/2.jpg" style="width:100%">
  <img class="mySlides" src="images/3.jpg" style="width:100%">
</div>

<div>
<center>
212<br> 
Johar Town near Charsi Tikka<br>
0900-78601<br>
Š 2019 PIZZA 212, Pakistan Inc. All rights reserved. Powered by Pizza Hut, Pakistan.
</center>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

</body>
</html>