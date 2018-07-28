<?php
$emailid=$_GET['emailid'];

?><html>

<head>

<style>

body {font-family: "Lato", sans-serif;}

/* Style the tab */

div.tab {

overflow: hidden;

border: 1px solid #ccc;

background-color: #f1f1f1;

}

/* Style the buttons inside the tab */

div.tab button {

background-color: inherit;

float: left;

border: none;

outline: none;

cursor: pointer;

padding: 14px 16px;

transition: 0.3s;

font-size: 17px;

}

/* Change background color of buttons on hover */

div.tab button:hover {

background-color: #ddd;

}

/* Create an active/current tablink class */

div.tab button.active {

background-color: #ccc;

}

/* Style the tab content */

.tabcontent {

display: none;

padding: 6px 12px;

border: 1px solid #ccc;

border-top: none;

}

/* Style the close button */

.topright {

float: right;

cursor: pointer;

font-size: 20px;

}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 8px;
}

.topright:hover {color: red;}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}


</style>
<script type="text/javascript">
var em="<?php echo $emailid ?>";

function search_patient(){
	anotherdiv.style.display= "none";
	diagnose_div.style.display="none";
	search_div.style.display="inline";
	
}
function view_disease(){
	anotherdiv.style.display= "none";
	diagnose_div.style.display="inline";
	search_div.style.display="none";
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
     document.getElementById("diagnose_div").innerHTML = this.responseText;
    }
  };
  //alert(d);
  xhttp.open("GET", "view_disease.php", true);
  xhttp.send();
}
function view_patient(){
	anotherdiv.style.display= "none";
	diagnose_div.style.display="none";
	search_div.style.display="inline";
	
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
     document.getElementById("search_div").innerHTML = this.responseText;
    }
  };
  //alert(d);
  xhttp.open("GET", "view_patient.php", true);
  xhttp.send();
}
function view_doctor(){
	anotherdiv.style.display= "none";
	diagnose_div.style.display="none";
	search_div.style.display="inline";
	
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
     document.getElementById("search_div").innerHTML = this.responseText;
    }
  };
  //alert(d);
  xhttp.open("GET", "view_doctor.php", true);
  xhttp.send();
}

function add_disease(){
	anotherdiv.style.display= "none";
	diagnose_div.style.display="inline";
	search_div.style.display="none";
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
     document.getElementById("diagnose_div").innerHTML = this.responseText;
    }
  };
  //alert(d);
  xhttp.open("GET", "add_disease.php", true);
  xhttp.send();
}
function add_doctor(){
	anotherdiv.style.display= "inline";
	diagnose_div.style.display="none";
	search_div.style.display="none";
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
     document.getElementById("anotherdiv").innerHTML = this.responseText;
    }
  };
  //alert(d);
  xhttp.open("GET", "add_doctor.php", true);
  xhttp.send();
}

function search1(){
	anotherdiv.style.display= "none";
	diagnose_div.style.display="none";
	kkkk1.style.display="inline";
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
     document.getElementById("kkkk1").innerHTML = this.responseText;
    }
  };
  //alert(d);
  var c=document.getElementById("search").value;
  xhttp.open("GET", "patient_search.php?search="+c, true);
  xhttp.send();
}


function test2(){
		window.location.href = "index.html";
}


</script>

</head>
<body>
<body style="background-size: cover; background-image: url(images/doctor.jpeg);" onload="javascript:view_patient()">
<div class="container-fluid " style="background-color: grey;" >
  <div class="jumbotron" style="background-color:#138D75;height:200;">
   <center> <h1 style="color: white; font-weight: bold;" class="w3-animate-left"> Smart Health Prediction</h1>
    <p class="w3-animate-right"> - Providing the best solution for Health Prediction </p></center>

  </div>  
 
<div class="tab">
<!--<input type="button" value="My Profile" class="tablinks" onMouseover="load('anotherdiv', 'new1.php');">-->
<button class="tablinks" onclick="add_doctor()">Add Doctor</button>
<button class="tablinks" onclick="add_disease()">Add Disease</button>
<button class="tablinks" onclick="view_doctor()">View Doctors</button>
<button class="tablinks" onclick="view_disease()">View Disease</button>
<button class="tablinks" onclick="view_patient()">View Patients</button>
<!--<button class="tablinks" onclick="search_patient()">Search Patient</button>-->
<button class="tablinks" onclick="test2()">Logout</button>
</div>
</div>
<div id='anotherdiv' style="display:none;">
	welcome to Patient Homepage
</div>
<div id='diagnose_div' style="display:none;">

</div>
<div id='search_div' style="display:none;" >
<center>
			<h3 style="text-align: center; color:blue;"> Search Patients</h3>

			<input type="text" id="search" style="color: green;" placeholder="ENTER DETAIL" ><br><br>
			<button class="btn btn-success"  onclick="search1()"> SEARCH </button>
			</center>
			

<h3 style='text-align:center;'> Search Result </h3>
 
<div class="well" style="background-color: Moccasin ;display: none;" id="kkkk1">

</div>

</div>

</body>

</html>