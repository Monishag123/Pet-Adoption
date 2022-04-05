
<!DOCTYPE html>
<body>
	<a href="Feedback.php">Click here to navigate for <b>Feedback Page</b></a>

<?php
	session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	//echo "<script>alert('connect succesfully')</script>";

	
if(isset($_POST['purchase1'])){	
	$username=$_POST['username'];
	$email=($_POST['email']);
	$number=($_POST['number']);
	$addres=($_POST['addres']);
	
	
	$sql="INSERT INTO `purchase` (username,email,number,address) VALUES ('$username', '$email', '$number', '$addres')";
	$query=mysqli_query($conn,$sql);
	if($query)
	echo "<script>alert('Purchase Successful')</script>";
	else
	echo "<script>alert('Purchase Unsuccessful')</script>";

}

						
?>
</body>
</html>