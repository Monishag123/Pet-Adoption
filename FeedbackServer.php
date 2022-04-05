<?php
	session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	
	
	if(isset($_POST['feedbackPost'])){
	
		
		$username=($_POST['username']);
		$give_feedback=($_POST['give_feedback']);
			
		$sql="INSERT INTO `feedback`( `username`, `give_feedback`) VALUES ('$username','$give_feedback')";
		
		$query=mysqli_query($conn,$sql);
			
		if($query)
		echo "<script>alert('Feedback Successful')</script>";
		else
		echo "<script>alert('Feedback UnSuccessful')</script>";
	}

	echo "Thanks for Thinking to Rate us! Please give your Feedback";
	
?>