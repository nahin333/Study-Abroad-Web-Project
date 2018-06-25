<?php include "lib/Session.php" ?>
<?php include "lib/Cookie.php" ?>
<?php Cookie::checkLogin(); ?>
<?php include "inc/header.php" ?>
<!DOCTYPE html>
<html lang="">
<head>
<title>Study Abroad</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/searchsuggest.js" type="text/javascript"></script>
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
.searchmenu {
	position:absolute;
	left:955px;
	top:83px;
	z-index:1000;
}
.searchmenu ul{
	float:left;
	list-style-type:none;
}
.searchmenu ul li{
	background:#6b936d;
	border-bottom:1px solid black;
}
.searchmenu ul li:hover{
	background:white;
	
}
.searchmenu ul li a{
	display:block;
	color:white;
	text-decoration:none;
	padding:10px;
	min-width:220px;
}
.searchmenu ul li:hover a{
	color:green;
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
	  
      <input type="text" placeholder="Search.." name="keyword" onkeyup="suggest(this.value)">
      <button type="submit"><i class="fa fa-search"></i></button>
     
      </form>

    </div>
	
	
	
    <!-- ################################################################################################ -->
  </header>
  	 <div class="searchmenu">
	</div>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/01.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <h3 class="heading">See the World</h3>
            <p>The biggest reason you should consider a study abroad program is the opportunity to see the world.</p>
            <footer><a class="btn" href="https://www.internationalstudent.com/study-abroad/guide/ten-benefits-to-studying-abroad/">VIEW MORE</a></footer>
          </article>
        </li>
        <li>
          <article>
            <h3 class="heading">Full Degree Programs</h3>
            <p>Many college students do a semester abroad as part of their undergraduate education.</p>
            <footer><a class="btn" href="https://www.studyabroad.com/full-degree-worldwide">VIEW MORE</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <ul class="nospace group services">
	
      <li class="one_third first">
        <article><i class="fa fa-address-card-o"></i>
          <h6 class="heading">Study Abroad</h6>
          <p>Study Abroad Programs are for experiential education. Picture the world as your classroom with each destination a new interactive textbook where instead of reading, you are experiencing history, art, culture, fashion, food and the arts in real-time!</p>
          <footer><a class="btn" href="https://www.studyabroad.com/worldwide">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="fa fa-leanpub"></i>
          <h6 class="heading">Intern Abroad</h6>
          <p>An internship abroad could be a great opportunity to not only develop professional knowledge but also expand your academic and cultural horizons. During your international internship, you could be placed in a field relevant to your studies.</p>
          <footer><a class="btn" href="https://www.studyabroad.com/internships-worldwide">Read More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="fa fa-bath"></i>
          <h6 class="heading">Volunteer Abroad</h6>
          <p>Volunteer abroad programs could be a great opportunity to gain unique experience, while meeting people and seeing the world. Through international volunteering, you could get your hands dirty on a project,or help provide essential medical care</p>
          <footer><a class="btn" href="https://www.studyabroad.com/volunteer-worldwide">Read More &raquo;</a></footer>
        </article>
      </li>
	  
	  
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h1><strong>Studying Abroad <span color="red">Can Change  </span> the Way You See The World.</strong></h1>
    </div>
    <div class="group">
      <div class="one_half first">
        </br>
        <p>Study Abroad Programs give you the opportunity to experience the world as your classroom. Rather than picking things up from books and the Internet, navigating a new landscape may open your eyes to culture, history, a new language or your heritage. Studying Abroad opens the door to personal growth and discovery too. As you learn to say ‘hello’ in a foreign language, make friends, eat exciting new foods, it is bound to boost your confidence, teach you self-reliance and stretch the parameters of your comfort zone.</p>
        <footer><a class="btn" href="https://www.theodysseyonline.com/studying-abroad-changes-world">Read More &raquo;</a></footer>
      </div>
      <div class="one_half">
        <p><strong></strong></p>
        <a href="#"><img src="images/demo/pic1.jpg" alt=""></a>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>

<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    
    <div class="group team">
      <figure class="one_quarter first"><a href="#"><img src="images/demo/c1.jpg" alt=""></a>
        <figcaption>
          <h6 class="heading"><a href="https://college.harvard.edu/admissions">Harvard</a></h6>
          <p>Harvard University is a private Ivy League research university in Cambridge, Massachusetts. Established in 1636 and named for clergyman John Harvard.</p>
          
        </figcaption>
      </figure>
      <figure class="one_quarter"><a href="#"><img src="images/demo/c2.jpg" alt=""></a>
        <figcaption>
          <h6 class="heading"><a href="http://mitadmissions.org/content">MIT</a></h6>
          <p>The Massachusetts Institute of Technology is a private research university in Cambridge, Massachusetts, United States.</p>
          
        </figcaption>
      </figure>
      <figure class="one_quarter"><a href="#"><img src="images/demo/c3.jpg" alt=""></a>
        <figcaption>
          <h6 class="heading"><a href="http://www.ox.ac.uk/admissions">Oxford</a></h6>
          <p>The University of Oxford is a collegiate research university located in Oxford, England. It has no known date of foundation.</p>
          
        </figcaption>
      </figure>
      <figure class="one_quarter"><a href="#"><img src="images/demo/c4.jpg" alt=""></a>
        <figcaption>
          <h6 class="heading"><a href="https://www.stanford.edu/admission/">Stanford</a></h6>
          <p>Stanford University is a private research university in Stanford, California, in Silicon Valley, and ranking as one of the world's top-ten.</p>
          
        </figcaption>
      </figure>
	  
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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