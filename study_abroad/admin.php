<?php include "lib/Session.php" ?>
<?php include "lib/Cookie.php" ?>
<?php session_start(); ?>
<?php include 'inc/header.php'; ?>
<?php
					
					if(isset($_GET['action']) && $_GET['action'] == "logout")
					{
						Cookie::destroy();
					}
					
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
      <h1><strong>MANAGE ACCOUNT</strong></h1>
    </div>
    <div>
	<?php
	
	    $user = $_SESSION['username'];
		$query = "select * from tbl_user where username != '$user'";
		$getUser = $db->select($query);
		if($getUser){
			while($result = $getUser->fetch_assoc()){
	
	?>
               <h1><?php echo $result['username']; ?></h1>
	<button class="button button3" onclick="location.href='deleteAccount.php?delaccount=<?php echo $result['id']; ?>'" type="button" >delete</button></br>
	
		<?php } } ?>
	
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