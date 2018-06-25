<?php include "lib/Session.php" ?>
<?php include "lib/Cookie.php" ?>
<?php Cookie::checkCookie(); ?>
<?php include "inc/header.php" ?>
<?php

	$id = Session::get("userId");
	$query = "select username from tbl_user where id = '$id'";
	$result = $db->select($query);
	$value = mysqli_fetch_array($result);
	$username = $value['username'];
?>
<!DOCTYPE html>
<html lang="">
<head>
<title>Study Abroad</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
div {
    text-align: justify;
    text-justify: inter-word;
}
</style>
<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #7f7f7f;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #191919;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #323232;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
.button {
    background-color: #4c4c4c; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


.button3 {width: 100%;}
		table,th,td {
		  border : 1px solid black;
		  border-collapse: collapse;
		}
		th,td {
		padding: 5px;}
</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Study Abroad</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
	
	  
	  <form class="example" action="search.php" method="POST" style="margin:auto;max-width:300px">
	  
      <input type="text" placeholder="Search.." name="keyword">
      <button type="submit"><i class="fa fa-search"></i></button>
     
      </form>

    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php
					
					if(isset($_GET['action']) && $_GET['action'] == "logout")
					{
						$_SESSION['logout'] = true;
						Cookie::destroy();
					}
					
					?>


<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.php">Home</a></li>
		        <li><a href="exams.php">Exams</a></li>
				<li><a href="news.php">News</a></li>
		        <li><a href="about.php">About Us</a></li>
		 
		        <li><a href="contact.php">Contact</a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				<li><a href="#"> </a></li>
				
				
				
				<li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
				<li><a href="?action=logout"><img style="width:40px;height:40px;" src="images/signout.png" alt=""></a></li>
				
    </ul>
    <!-- ################################################################################################ -->
  </nav>
  
</div>



<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
	<div class="sectiontitle">
      <h1 style="margin-left:40px;"><strong>TOP UNIVERSITIES</strong></h1>
    </div>
<div>

						<button  class="button button3" type="button" onclick="loadDoc()">TOP UNIVERSITIES</button>
						
						<br><br>
						<table id="demo"></table>

						<script>
						function loadDoc() {
						  var xhttp = new XMLHttpRequest();
						  xhttp.onreadystatechange = function() {
						    if (this.readyState == 4 && this.status == 200) {
						      myFunction(this);
						    }
						  };
						  xhttp.open("GET", "cd.xml", true);
						  xhttp.send();
						}
						function myFunction(xml) {
						  var i;
						  var xmlDoc = xml.responseXML;
						  var table="<tr><th>UNIVERSITY</th><th>RANKING</th><th>RESEARCH INDEX</th><th>WEBSITE</th></tr>";
						  var x = xmlDoc.getElementsByTagName("UNIVERSITY");
						  for (i = 0; i <x.length; i++) { 
						  	table += "<tr><td>" 
						   
						    table +=x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
						    "</td><td>" +
						    x[i].getElementsByTagName("RANKING")[0].childNodes[0].nodeValue +
						    "</td><td>" +
						    x[i].getElementsByTagName("QUALITY")[0].childNodes[0].nodeValue +
						    "</td><td>" +
						    x[i].getElementsByTagName("WEBSITE")[0].childNodes[0].nodeValue +
						    "</td></tr>";
	
	
						  }
						  document.getElementById("demo").innerHTML = table;
						}

						</script>
						<br>
						
					</div>
	</br>
	</br>
    <div class="sectiontitle">
      <h1><strong>TEST EXAMS</strong></h1>
    </div>
    <div>

	<button class="button button3" onclick="location.href='sat.php'" type="button" >SAT</button></br>
	<button class="button button3" onclick="location.href='ielts.php'" type="button" >IELTS</button></br>
	<button class="button button3" onclick="location.href='toefl.php'" type="button" >TOEFT</button></br>
	<button class="button button3" onclick="location.href='gre.php'" type="button" >GRE</button>
	</div>
  </section>
   
  
</div>





<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved </p>
    <p class="fl_right">Designed by&nbsp;<i>Nahin 
				Kumar Dey</i></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>