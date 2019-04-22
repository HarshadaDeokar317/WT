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
	


	
	$query="insert into stud2 values('$fname','$username','$password','$contact','$gender','$class','$address')";
	
	if($conn->query($query)==TRUE)
	{
		echo "<script>
		alert('Data Inserted Sucessfully....!!');
		document.location.href='reg.html';
		</script>";
		
		
	}
	else
	{
		echo "Error occurred";
		
	}
	

}

?>




