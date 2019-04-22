<html>
<head>
<title>View Records</title>
</head>
<body>


<?php
$conn = new mysqli("localhost", "root", "", 'registration');
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT  fname,username,password,contact,gender,class,address FROM stud2";
$sql = "SELECT  *  FROM stud2";

$result =  $conn->query($sql);
?>



<h1 align="center"> Records from database displayed here</h1>
<table border="2" cellspacing="2 px" cellpadding="2 px" width="40%" heigth="40%">
<tr>

<th>Fistname</th>   
<th>usernamem</th>
<th>password</th>
<th>contact</th>
<th>Gender</th>
<th>Class</th>
<th>Address</th>


</tr>

					
	
<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		
        echo "<td> " . $row["fname"]. "</td>"; 
		echo "<td> " . $row["username"]. "</td>";
		echo "<td> " . $row["password"]. "</td>";
		echo "<td> " . $row["contact"]. "</td>";
		echo "<td> " . $row["gender"]. "</td>";
		echo "<td> " . $row["class"]. "</td>";
		echo "<td> " . $row["address"]. "</td>";
		
		
		
		echo"</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>
</body>
</html>