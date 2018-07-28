<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="health";
  $conn=new mysqli($servername,$username,$password,$db);

//include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$contact=$_POST['contact'];
$emailid=$_POST['emailid'];
$psw=$_POST['psw'];
$city=$_POST['city'];
$Qualification=$_POST['Qualification'];
$speciality=$_POST['speciality'];
$experience=$_POST['experience'];

$dob=$_POST['dob'];
$conn->query("insert into doctor1(fname,lname,gender,address,pincode,contact,emailid,psw,city,Qualification,speciality,experience) values('$fname','$lname','$gender','$address','$pincode','$contact','$emailid','$psw','$city','$Qualification','$speciality','$experience')");
if($conn)
{
  header('location:admin_home.php');
}
}
?>