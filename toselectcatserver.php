<!DOCTYPE html>
<head>
    <title>
        ADOPTION PAGE
</title>

<body>
<?php
	session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	//echo "<script>alert('connect succesfully')</script>";

	
if(isset($_POST['cat1'])){	
	
	$sql="INSERT INTO `toselectcat` (cat_name,cat_age,cat_gender,cat_breed) VALUES ('guffy', '4 years', 'male', 'persian cat')";
	$query=mysqli_query($conn,$sql);
	if($query)
	echo "<script>alert('Inserted Successfully')</script>";
	else
	echo "<script>alert('Unsuccessful Insertion')</script>";

}	

else if(isset($_POST['cat2'])){	

	$sql="INSERT INTO `toselectcat` (cat_name,cat_age,cat_gender,cat_breed) VALUES ('maggie', '3.5 years', 'female', 'bobtails')";
	$query=mysqli_query($conn,$sql);
	if($query)
	echo "<script>alert('Inserted Successfully')</script>";
	else
	echo "<script>alert('Unsuccessful Insertion')</script>";

}	

else if(isset($_POST['cat3'])){	
	
	$sql="INSERT INTO `toselectcat` (cat_name,cat_age,cat_gender,cat_breed) VALUES ('jyo', '5 years', 'male', 'bengal cat')";
	$query=mysqli_query($conn,$sql);
	if($query)
	echo "<script>alert('Inserted Successfully')</script>";
	else
	echo "<script>alert('Unsuccessful Insertion')</script>";

}	

else if(isset($_POST['cat4'])){	
	
	
	$sql="INSERT INTO `toselectcat` (cat_name,cat_age,cat_gender,cat_breed) VALUES ('honey', '2 years', 'female', 'american shorthair')";
	$query=mysqli_query($conn,$sql);
	if($query)
	echo "<script>alert('Inserted Successfully')</script>";
	else
	echo "<script>alert('Unsuccessful Insertion')</script>";

}	

else if(isset($_POST['cat5'])){	
	
	$sql="INSERT INTO `toselectcat` (cat_name,cat_age,cat_gender,cat_breed) VALUES ('candy', '5 years', 'female', 'normal cat')";
	$query=mysqli_query($conn,$sql);
	if($query)
	echo "<script>alert('Inserted Successfully')</script>";
	else
	echo "<script>alert('Unsuccessful Insertion')</script>";

}	

?>

<a href = "purchase.php"> Click here for Purchase Page </a>
</body>
</html>