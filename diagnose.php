<?php
//session_start();
$diagnose_list = $_GET['diagnose_list'];
//
$dl = explode(',',$diagnose_list);

for($i = sizeof($dl);$i<=5;$i+=1){
	$dl[$i-1] = 'NULL';
}

//echo print_r($dl);

$conn =new mysqli("localhost","root","","health"); // Check connection
    
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT disease FROM diesease where 
	Symptom1 = '$dl[0]' OR 
	Symptom2 = '$dl[0]' OR 
	Symptom3 = '$dl[0]' OR 
	Symptom4 = '$dl[0]' OR 
	Symptom5 = '$dl[0]' 
	AND Symptom1 = '$dl[1]' OR 
	Symptom2 = '$dl[1]' OR 
	Symptom3 = '$dl[1]' OR 
	Symptom4 = '$dl[1]' OR 
	Symptom5 = '$dl[1]' 
	AND Symptom1 = '$dl[2]' OR 
	Symptom2 = '$dl[2]' OR 
	Symptom3 = '$dl[2]' OR 
	Symptom4 = '$dl[2]' OR 
	Symptom5 = '$dl[2]' 
	AND Symptom1 = '$dl[3]' OR 
	Symptom2 = '$dl[3]' OR 
	Symptom3 = '$dl[3]' OR 
	Symptom4 = '$dl[3]' OR 
	Symptom5 = '$dl[3]' 
	AND Symptom1 = '$dl[4]' OR 
	Symptom2 = '$dl[4]' OR 
	Symptom3 = '$dl[4]' OR 
	Symptom4 = '$dl[4]' OR 
	Symptom5 = '$dl[4]'";
	
$result = $conn->query($sql);

if ($result->num_rows>0)
{		
	while($row = mysqli_fetch_assoc($result)){
		echo "<B> Dear Patient You May Have ".$row['disease']."</b>";
		?>
		<input type='button' class="button" onclick="find_doctor('<?php echo $row['disease']; ?>')" Value="Find Doctors">
		<br><br>
	<?php
	}
}

$conn->close();	
?>