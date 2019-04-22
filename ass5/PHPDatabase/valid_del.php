<?php
$conn = new mysqli("localhost", "root", "", 'registration');

// echo "Successfully connected to database<br>";

if(isset($_POST['submit'])){
	$contact=$_REQUEST['contact'];

	
	$query="delete from stud2 where contact=('$contact')";

if($conn->query($query)==TRUE)
	{
		echo "<script>
		alert('Data Inserted Sucessfully....!!');
		document.location.href='reg.html';
		</script>";
		
	}
	else
	{
		echo "Error occurred:";
		
	}
	

}









?>