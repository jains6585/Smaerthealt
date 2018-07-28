<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="health";
  $conn=new mysqli($servername,$username,$password,$db);

//include_once('include/config.php');
if(isset($_POST['submit']))
{
$s=$_POST['Symptom1'];
$s1=$_POST['Symptom2'];
$s2=$_POST['Symptom3'];
$s3=$_POST['Symptom4'];
$s4=$_POST['Symptom5'];
$d=$_POST['Disease'];
$c=$_POST['category'];

$conn->query("insert into diesease(Disease,Symptom1,Symptom2,Symptom3,Symptom4,Symptom5,category) values('$d','$s','$s1','$s2','$s3','$s4','$c')");

if($conn)
{
  header('location:admin_home.php');
}
}
?>