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
 
  echo "<script>alert('Successfully Registered. You can login now');</script>";
  header('location:doctor-login.php');
}
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
<title>Smart Health Prediction System</title></head>
  
<body>

<body style="background-size: cover; background-image: url(images/doctor.jpeg);">

<div style="background-color:pink;#777;padding:60px 120px 60px 120px; display:inline-block;margin-left: 25%;margin-top: 10%; border-radius: 30px ">

<form method="post" name="form1">

First Name:<br>

<input type="text" name="fname" required><br>

Last Name:<br>

<input type="text" name="lname" required><br>

Gender:<br>

<input type="radio" name="gender" value="male" required> Male

<input type="radio" name="gender" value="female" required> Female
<br> D.O.B.:<br>

<input type="date" name="dob" required><br>

Address:<br>

<input type="text" name="address" required><br>

Pincode:<br>

<input type="text" name="pincode" required><br>
 
Contact NO.:<br>

<input type="text" name="contact"required><br>

Email ID:<br>

<input type="email" name="emailid" required><br>

Password:<br>

<input type="password" name="psw"required><br>

city:<br>

<input type="text" name="city" required><br>

Qualification:<br>

<select name="Qualification"required>

<option value="M.B.B.S">M.B.B.S</option>

<option value="B.M.B.S">B.U.M.S</option>

<option value="M.D">M.D</option>

<option value="M.B.Ch.B">M.B.Ch.B</option>

<option value="M.B.B.Ch">M.B.B.Ch</option>

</select><br>

Speciality:<br>

<input type="text" name="speciality" required><br>

Experience:<br>

<input type="text" name="experience" required><br>

     <p>
                  Already have an account?
                  <a href="doctor-login.php">
                    Log-in
                  </a>
                </p>
                <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
                  Submit <i class="fa fa-arrow-circle-right"></i>
                </button>
             
</form>
</div>

</body>

</html>

           