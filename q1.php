<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['rice'];
	if($a=="rice"){
		header('Location:q2.php');
	}else{
		echo '<script>alert("You Lost!")</script>';
		//header('Location:q1.php');
	}
}
?>

<html>
<head>
</head>
<body>
<h2>1.What crop is sown on largest area in India?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="rice" name="Rice" value="rice">
  <label for="rice">Rice</label><br>
  <input type="radio" id="wheat" name="wheat" value="wheat">
  <label for="wheat">Wheat</label><br>
  <input type="radio" id="sugarcane" name="sugarcane" value="sugarcane">
  <label for="sugarcane">sugarcane</label><br>
  <input type="radio" id="Maize" name="Maize" value="Maize">
  <label for="Maize">Maize</label><br>
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
