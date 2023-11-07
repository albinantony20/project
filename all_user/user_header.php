<!DOCTYPE html>
<html lang="en">

<!-- Basic -->

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Heavens Caterers</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../all_user_assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../all_user_assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/custom.css">
	

	<?php require('userheader2.php');?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
	  


    }

	.dropdown-item:hover {
      background-color: #d0a772; /* Change the background color when mouse is placed over the dropdown menu */
	}

  </style>
</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
				<img width="115" src="../all_user_assets/images/heavens.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="category_index.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item dropdown">
							<a onclick="navigateToPHP()" class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">
<?php 
if(isset($_SESSION['username']))
{ 
   $name=$_SESSION['username'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php } ?></a>
							<div class="dropdown-content" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="vieworder.php">My Orders</a>
              <a class="dropdown-item" href="cancelorder.php">Cancelled Orders</a>
              <a class="dropdown-item" href="logout.php">Log Out</a>
							</div>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
</body>
</html>
