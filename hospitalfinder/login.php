<?php

include("db.php");
$obj=new db();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
label
{color:#000000
}
table tr td
{
width:auto;
}
</style>
<title>Hospital Finder | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Medical Care a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- flexslider-css-file -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- //flexslider-css-file -->

<link rel="stylesheet" href="css/easy-responsive-tabs.css">

<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons-css-file -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">	<!-- bootstrap-css-file -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">	<!-- style-css-file -->


<!-- gallery -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //gallery -->

<!-- fonts -->
 <link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
 <link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
 <!-- //fonts -->
 
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Default-JavaScript-File -->
	
<script src="js/bootstrap.js"></script>	<!-- //bootstrap-JavaScript-File -->
<script type="text/javascript" language="javascript">
function getslocation(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("rose").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","ajaxsearch.php?locat="+str,true);
xmlhttp.send(null);
}





</script>
		
</head>
<!-- Head -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top"> 
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Hospital Finder</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php">Medical Care</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li><a href="index.php">Home</a></li>
							
						<li><a href="userregister.php"> &nbsp; User Registration</a></li>
							<li><a href="login.php"> &nbsp; Login</a></li>
							</li>
							
							</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!--banner-->
		<!--Slider-->
			<div class="w3l_banner_info">
				<div class="col-md-5 banner-form-agileinfo">
				</div>
				<div class="col-md-7 slider">
					<div class="callbacks_container">
								
					</div>
				</div>
				<div class="clearfix"></div>
			<!--//Slider-->
			
			</div>
		<!--//banner-->
		
	</div>	
	<!-- //banner --> 
			<!-- about -->
<div class="line">
</div>
	<div class="about" id="login">
		<div class="container">
			<div class="w3ls-heading">
			 
				<h3>Login Now</h3><br/>
			</div>
			<form name="form_edit3" method="post" enctype="multipart/form-data" class="login"  action="loginpro.php">
                
                <table class="table">
                    
                   <tr><td><label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Username</label></td><td>
                    <input type="text"  placeholder="Username" name="uname"/></td></tr>
					
                   <tr><td><label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Password</label></td><td>
                    <input type="password"  placeholder="Password" name="pwd"/></td></tr>
                   
                </table>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<input type="submit" name="submit" value="Submit" onClick="return login()" >
            </form>
			<script type="text/javascript">
function login()
{
	if(document.form_edit3.uname.value=="")
{
alert("Enter User Name");
document.form_edit3.uname.focus();
return false;
    }
	if(!(isNaN(document.form_edit3.uname.value)))
{
alert("Only alphabets are allowed");
document.form_edit3.uname.focus();
return false;
}
if(document.form_edit3.pwd.value=="")
{
alert("Enter Password");
document.form_edit3.pwd.focus();
return false;
    }
	}
	</script>
		</div>
	</div>
<!-- //about -->

<!-- about -->
<!-- //about -->



<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2019 Hospital Finder. All rights reserved </p>
</div>
<!-- //copyright -->



<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>





<!--banner Slider starts Here-->
		<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

							<!--banner Slider starts Here-->
							<!--start-date-piker-->
							<link rel="stylesheet" href="css/jquery-ui.css" />
									<script src="js/jquery-ui.js"></script>
									<script>
										$(function() {
										$( "#datepicker" ).datepicker();
										});
									</script>
							<!--/End-date-piker-->
							
<!-- js for smooth scrollings -->
	<script src="js/SmoothScroll.min.js"></script>
<!-- js for smooth scrollings -->

<!-- flexisel -->
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
<!-- //flexisel -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
<!-- //fixed-scroll-nav-js --> 







</body>
</html>