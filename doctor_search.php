<?php
$conn =new mysqli("localhost","root","","health"); // Check connection
$search= $_REQUEST['search'];
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM doctor1 where 
	fname = '$search' OR 
	lname = '$search' OR 
	gender = '$search' OR 
	address = '$search' OR 
	pincode = '$search' OR 
	contact = '$search' OR 
	emailid = '$search' OR 
	city = '$search' OR 
	Qualification = '$search'OR 
	speciality = '$search' OR 
	experience = '$search'  OR 
	disease = '$search' 
	";

//$param = $_REQUEST['param'];
//echo $q;
		$result = $conn->query($sql);
	if ($result->num_rows>0){
		echo "<table class='table table-striped'>";	
		echo "<tr><th>Name</th>";
		echo "<th>City</th>";
		echo "<th>Contact No</th>";
		echo "<th>Email</th>";
		echo "</tr>";
		while($row = $result->fetch_assoc()){
				  	echo "<tr><td >".$row['fname']."  ".$row['lname']."</td><td>
				 	".$row['city']."</td><td>".$row['contact']."</td><td>".$row['emailid']."</td>";
				 	
				
				  	echo "</tr>";
		}
	}
	else{
		echo "<h3 style='color:red;text-align:center;'>No Record Found</h3>";
	}
	echo "</table></div>";
	
?>