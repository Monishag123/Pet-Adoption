<?php
	session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	//echo "<script>alert('connect succesfully')</script>";


if(isset($_POST['register'])){
	
	$username=$_POST['username'];
	$email=($_POST['email']);
	$password=trim($_POST['password']);
	$confirmpassword=trim($_POST['confirmpassword']);
	
	
	
	if($password==$confirmpassword){
		$s="SELECT * FROM `aithentication` WHERE `username` = '$username'";
		$res=mysqli_query($conn,$s);
		$num=mysqli_num_rows($res);
		if($num==1){
			echo "<script>alert('USERNAME ALREADY TAKEN! Please choose different username')</script>";
			
		}
		else{
			$s1="SELECT * FROM `aithentication` WHERE `email`='$email'";  
			$r=mysqli_query($conn,$s1);
			$n=mysqli_num_rows($r);
			if($n==1){
				echo "<script>alert('email already registered. Please Login')</script>";
			}
			else{
				$sql="INSERT INTO `aithentication` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
				$query=mysqli_query($conn,$sql);
				
				 if(!$query){
					echo "<script>alert('Invalid credentials!')</script>";
					
				}
				else{
					echo"<script>alert('Registration Successful... Please Login')</script>";
					header('location: home.php');
						
				
				}
			}
		}
		}
	else{
		echo "<script>alert('Passwords do not match!')</script>";
	}
}


	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$username = stripcslashes($username);  
		$password = stripcslashes($password);  
		$username = mysqli_real_escape_string($conn, $username);  
		$password = mysqli_real_escape_string($conn, $password);  
		
		 $s = "select * from `aithentication` where `username` = '$username' and `password` = '$password'"; 
		 $res=mysqli_query($conn,$s);
		 $num=mysqli_num_rows($res);
		 
		 if($num==1){
			 echo "<script>alert('Login Succesfull')</script>";
			 header('location: home.php');
		 }else{
			 echo "<p>Login failed</p>";
		 }

	}
	
?>