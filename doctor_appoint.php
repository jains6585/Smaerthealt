<?php
session_start();
$conn =new mysqli("localhost","root","","health"); // Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$fname = $_GET['fname'];

$sql= "INSERT INTO patient_appoint (ptfname, ptlname,paddress,pcontact)
SELECT fname,lname,address,contact FROM patient
WHERE fname='$fname'";
	
$result = $conn->query($sql);

if ($result->num_rows>0)
{		
	echo "<B> APPOINTMENT FIXED ON: </b><br>";
	$count = 0;
	while($row = mysqli_fetch_assoc($result)){
		$count+=1;
		?>
		<input type="date" value="select date for appointment" name="date">
		<br>
		<?php 
		
		$sql1= "INSERT INTO patient_appoint fixed_date) VALUES (".$_GET['date'].")";
		$res=$conn->query('$sql1');
		if($res->num_rows>0)
		{
			echo "Appointment fixed!";
		}
	
		
	}
}

$conn->close();	
?>