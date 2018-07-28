<?php
session_start();
$conn =new mysqli("localhost","root","","health"); // Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$d1 = $_GET['d1'];
$sql = "SELECT * FROM doctor1 where disease='$d1'";
	
$result = $conn->query($sql);

if ($result->num_rows>0)
{		
echo "<div style='background-color:Azure;'>";
		echo "<div class='col-sm-8'><h2 style='color:#3370ff;text-align:center;'><b>SUGGESTED DOCTORS</b></h2></div>";
		echo "<div class='col-sm-4'><h4 style='color:green;text-align:center;'><b> DATE : ".date('d-M-Y')."</b></h4></div>";
	    echo "<div class='well table-responsive col-sm-12'><table class='table'>";	
		echo "<tr><th>Name</th>";
		echo "<th>City</th>";
		echo "<th>Contact No</th>";
		echo "<th>Email</th>";
		echo "</tr>";
		while($row = $result->fetch_assoc()){
				  	echo "<tr><td >".$row['fname']." . ".$row['lname']."</td><td>
				 	".$row['city']."</td><td>".$row['contact']."</td><td>".$row['emailid']."</td>";
				 	
				
				  	echo "</tr>";
		}
}
				else{
		echo "<h3 style='color:red;text-align:center;'>No Record Found</h3>";
	}
	echo "</table></div></div></div></div>";
	


$conn->close();	
?>