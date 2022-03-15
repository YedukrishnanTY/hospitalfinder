<?php
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$uname=$_SESSION['uname']; 
	$id=$_SESSION['id']; 

include("db.php");
$obj=new db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Hospital Finder | Home </title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Medically Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--//meta tags ends here-->
	<!--booststrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" />
	<!-- gallery-->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<!-- clients-->

	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- banner text slider-->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!-- banner text slider-->

	<link href="//fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600" rel="stylesheet">
	<!--//style sheet end here-->
</head>

<body>
	<div class="banner" id="home">
		<div class="w3-agile-logo">
			<div class=" head-wl">
				<div class="agileinfo-social-grids">
					
				</div>
				<div class="w3-header-top-right">
					<div class="email-right">
<?php
			 $logid=$_SESSION['id'];
			$select10="select * from hospital where hosname=(select hosname from hospital where logid=$logid)";
			$res10=$obj->exe($select10);
			?>
			<?php
			while($row10=mysqli_fetch_array($res10))
			{
		  ?>
					<p><span class="fa fa-hospital" aria-hidden="true"></span> <a href="" class="info"> <?php echo $row10[1];?></a></p>
<?php
}
?>
					</div>
					<div class="w3-header-top-right-text">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-w3layouts">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<h1><a class="navbar-brand " href="index.php">Hospital</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
						<li><a href="adddep.php">Departments</a></li>
						<li><a href="addfacility.php">Facilities</a></li>
						<li><a href="addpgm.php">Programs</a></li>
						<li><a href="adddoctor.php">Doctors</a></li>
						
						<li><a href="addschedule.php">Schedule</a></li>
						<li><a href="addbooking.php">Bookings</a></li>
						
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li><a href="addlab.php">Add Lab</a></li>
									<li><a href="changepass.php">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>


		<div class="container">

			<!-- header -->
			<header>

				<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								
							</ul>
						</div>
					</section>
				</div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- //header -->
	
	<!--subscribe-->
	<div style="background-color: #FFFFFF" class="about" id="department">
		<div class="container">
			<br/> <br/> <br/> <br/> <br/>
			<h3 class="title">Add Laboratory Details</h3>
			<?php
			 $logid=$_SESSION['id'];
			$sql="select * from hospital where logid=$logid";
			$res=$obj->exe($sql);
		  
		  ?>
			</p>
			<form name="form_edit1" method="post" enctype="multipart/form-data" class="login"  action="labaddpro.php">
                
                <table class="table table-condensed">
				
					<tr><td><label>Laboratory Name</label></td><td>
                    <input type="text" name="lname" placeholder="Laboratory Name" class="form-control" /></td></tr>
						<tr><td><label>City</label></td><td>
                    <input type="text" name="city" placeholder="City" class="form-control" /></td></tr>
						<tr><td><label>District</label></td><td>
                    <input type="text" name="dis" placeholder="District Name" class="form-control" /></td></tr>
						<tr><td><label>Pin Number</label></td><td>
                    <input type="text" name="pin" placeholder="Pin Number" class="form-control" /></td></tr>
						<tr><td><label>Email Id</label></td><td>
                    <input type="text" name="email" placeholder="Email Address" class="form-control" /></td></tr>
					<tr><td><label>Username</label></td><td>
                    <input type="text" name="username" placeholder="Username" class="form-control" /></td></tr>
					<tr><td><label>Password</label></td><td>
                    <input type="password" name="password" placeholder="Password" class="form-control" /></td></tr>
					 
                </table>
				<div class=" col-md-4 w3layouts_more-buttn">
											<a href="viewlab.php">View Laboratory Details</a>
										</div>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				 <input type="submit" name="submit" value="Submit" onClick="return depart()" >
            </form>
			<script type="text/javascript">
function depart()
{
	
if(document.form_edit1.lname.value=="")
{
alert("Enter Laboratory name");
document.form_edit1.lname.focus();
return false;
    }
	if(!(isNaN(document.form_edit1.lname.value)))
{
alert("Only alphabets are allowed");
document.form_edit1.lname.focus();
return false;
}
if(document.form_edit1.city.value=="")
{
alert("Enter city name");
document.form_edit1.city.focus();
return false;
    }
	if(!(isNaN(document.form_edit1.city.value)))
{
alert("Only alphabets are allowed");
document.form_edit1.city.focus();
return false;
}
if(document.form_edit1.dis.value=="")
{
alert("Enter district name");
document.form_edit1.dis.focus();
return false;
    }
	if(!(isNaN(document.form_edit1.dis.value)))
{
alert("Only alphabets are allowed");
document.form_edit1.dis.focus();
return false;
}
if(document.form_edit1.pin.value=="")
{
alert("Enter pin number");
document.form_edit1.pin.focus();
return false;
    }
	if((isNaN(document.form_edit1.pin.value)))
{
alert("Only numbers are allowed");
document.form_edit1.pin.focus();
return false;
}
var phone=document.form_edit1.pin.value.length;
var max=6;
if((phone<max) || (phone>max))
{
alert("Please Enter  6 digit pin Number");

document.form_edit1.phone.focus();
return false;
}
var email=document.form_edit1.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
if(document.form_edit1.email.value=="")
{
alert("Enter email id");
document.form_edit1.email.focus();
return false;
    }
	if(reg.test(email)== false)
 {
	  
        alert("Please enter a valid Email id");
        document.form_edit1.email.focus();
       return false;
    }
	if(document.form_edit1.username.value=="")
{
alert("Enter username");
document.form_edit1.username.focus();
return false;
    }
	if(document.form_edit1.password.value=="")
{
alert("Enter password");
document.form_edit1.password.focus();
return false;
    }
}
</script>
			
		</div>
	</div>
	<!--//subscribe-->
	
	
	<!--footer-->

	<div class="footer">
		<nav>
			<ul class="nav-buttom">
						<li><a href="adddep.php">Departments</a></li>
						<li><a href="addfacility.php">Facilities</a></li>
						<li><a href="addpgm.php">Programs</a></li>
						<li><a href="adddoctor.php">Doctors</a></li>
						<li><a href="addschedule.php">Schedule</a></li>
						<li><a href="addbooking.php">Bookings</a></li>
						<li><a href="changepass.php">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		
	</div>
	<footer>
		<p>&copy;2019 Hospital Finder. All Rights Reserved </p>
	</footer>
	<!--menu script-->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!--//menu script-->
	<!--FlexSlider banner-->

	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!--End-slider-script-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<script src="js/jquery.chocolat.js"></script>

	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.w3_agile_gallery_grid a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--client carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				itemsDesktop: [768, 1],
				itemsDesktopSmall: [414, 1],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: true,

			});

		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
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
</body>

</html>
<?php
 }
 else
 {
 ?>
 <script>
 alert("Invaid Login");
 window.location="../index.php";
 </script>
 <?php
 }
 ?>