<?php
$conn = new mysqli("localhost", "root", "", 'registration');

// echo "Successfully connected to database<br>";

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	
	$class=$_POST['class'];
	$address=$_POST['address'];
	
	
	$query ="update stud2 set
fname='$fname',username='$username', password='$password',
gender='$gender',class='$class',address='$address' where contact='$contact'";

	
	if($conn->query($query)==TRUE)
	{
		echo "<script>
		alert('Data updated Sucessfully....!!');
		document.location.href='update.html';
		</script>";
	
	}
	else
	{
		echo "Error occurred:".$query."<br>".$conn->error;
		
	}
	

}

?>