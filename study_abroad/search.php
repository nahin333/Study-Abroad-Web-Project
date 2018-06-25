<?php include 'inc/header.php'; ?>
<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(isset($_POST['keyword']))
	{
		$keyword = $_POST['keyword'];
	}
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
	<?php

				$query = "select * from tbl_news where title like '%$keyword%'";
				$getNews = $db->select($query);
				if($getNews){
					
					while($result = $getNews->fetch_assoc()){
				
	?>
    <div class="sectiontitle">
      <h1><strong><?php echo $result['title']; ?></strong></h1>
    </div>
    <div class="group">
      <div class="one_half first">
        </br>
		<div>			  
			<li><i class="fa fa-calendar-o"></i><span><?php echo $fm->formatDate($result['time']); ?></span></li>
		</div>
        <p><?php echo $result['body']; ?></p>
        <footer><a class="btn" href="<?php echo $result['link']; ?>">View More &raquo;</a></footer>
      </div>
      <div class="one_half">
        </br></br>
        <a href="#"><img src="images/demo/<?php echo $result['image']; ?>" alt=""></a>
      </div>
	  
		</br>	
				
    </div>
	 </br> </br> </br>
	<?php } } ?>
   
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