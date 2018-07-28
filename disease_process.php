<html>

<body>

<body style="background-color:powderblue;">

<div style="background-color:pink;#777;padding:60px 120px 60px 120px; display:inline-block;margin-left: 25%;margin-top: 10%; border-radius: 30px ">


<?php

$con=mysqli_connect("localhost","root","","health");

$s1=$_POST['sym1'];

if(isset($_POST['sym2']))

$s2=$_POST['sym2'];

if(isset($_POST['sym3']))

$s3=$_POST['sym3'];

if($s1!="")

{

$sql="SELECT * FROM `diesease` WHERE (Symptom1 = '$s1' OR Symptom2 = '$s1' OR Symptom3 = '$s1' OR Symptom4 = '$s1' OR Symptom5 = '$s1') ";


if(isset($s2) && $s2!="")

$sql = $sql." AND (Symptom1 = '$s2' OR Symptom2 = '$s2' OR Symptom3 = '$s2' OR Symptom4 = '$s2' OR Symptom5 = '$s2')";


if(isset($s3) && $s3!="")

$sql = $sql." AND (Symptom1 = '$s3' OR Symptom2 = '$s3' OR Symptom3 = '$s3' OR Symptom4 = '$s3' OR Symptom5 = '$s3')";
echo $sql;

$query = mysqli_query($con,$sql);



$row = mysqli_fetch_array($query);



echo "Disease is: ".$row['Disease'];

$ds = $row['Disease'];



$sql1="SELECT * FROM `doctor1` WHERE category = (SELECT category FROM `diesease` WHERE Disease = '$ds') ";


echo $sql1;

$query1 = mysqli_query($con,$sql1);

$cnt = mysqli_num_rows(mysqli_query($con,$sql1)); while($cnt>0){

$row1 = mysqli_fetch_array($query1);



echo "Doctor is: ".$row1['fname'];

$cnt=$cnt-1;

}

}

?>

<form name="frm1" action="disease_process.php" method="POST"> <input type="submit" value="submit" name="submit"> </form>

<script type="text/javascript" src="js/loadPage.js"></script> <script type="text/javascript" src="js/changedropdown.js"></script>

</body>

</html>