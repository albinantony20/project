
<?php
// include("header.php");	
?>
<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();
?>

<?php    
if(isset($_SESSION['username']))
{ 
	include('user_header.php');
	
}else{

	include("header.php");
	
}
?>

<!-- Start About -->
<br>
<br>
<br>
<br>
<br>

	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img width=400 src="../all_user_assets/images/cook.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<br>
						<h1>Welcome To <span> Heavens Caterers</span></h1>
						<br>
						<h4>Little Story</h4>
						<p>Heavens catering Services is a partnership firm providing healthy, tasty and good quality foods and related services with the blessings of Almighty Lord. If you are planning to serve healthy and tasty foods to your guests in your favourite occasions, here is everything you need. We are following traditional cooking policies and practices and maintaining hygiene at all areas of work. We are ensuring happy, peacefull and tension less occasions by providing customised and timely services.</p>
						<!--<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

    