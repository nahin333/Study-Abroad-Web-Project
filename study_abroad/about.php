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
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.php">Home</a></li>
		        <li><a href="exams.php">Exams</a></li>
				<li><a href="news.php">News</a></li>
		        <li><a href="about.php">About Us</a></li>
				
				<li><a href="#">Join Us</a>
                <ul>
                <li><a href="signup.php">User</a></li>
                <li><a href="admin_login.php">Admin</a></li>
                </ul>
                </li>
				
		        <li><a href="contact.php">Contact</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>



<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h1><strong>About Us</strong></h1>
    </div>
    <div>
	<p class="para">With the motto <b> " Join our mission to make study choice transparent, globally "</b> StudyAbroad is the source of information on educational opportunities for students to study in other countries. It is a comprehensive directory of study abroad programs, including summer study abroad, internship, service learning and volunteer abroad programs, high school study abroad, intensive language programs and more, all organized by subject or country or city. International education support through our study abroad handbook provides a guide to education abroad, health and safety and study abroad scholarship/financial aid information. </p>
	<p class="para">Education choice continues to reach a broad, global scale; and more students are keen to study abroad than ever before. Bring your institution to where over 19 million prospective students are searching for their next study abroad opportunity.We ensure that your institution shines in a place where students can discover the amazing programmes you’re offering, and choose for the right one for themselves. </p>
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