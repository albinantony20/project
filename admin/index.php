<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();
$rules=array(
	'username'=>array('required'=>true),
	'password'=>array('required'=>true)
);
$validator=new formValidator($rules);
if(isset($_POST['login']))
{
	if($validator->validate($_POST))
	{
	$data=array(
		'username'=>$_POST['username'],
		'password'=>$_POST['password']
		);
		$table='admin';
		if($info=$dao->login($data,$table))
		{
		$_SESSION['username']=$info['username'];
		header('location:category.php');
		}
		else
		{
		echo "<script> alert('Invalid Credentials');</script>";
		}

	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ADMIN LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-0">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      
				
		      	<h3 class="text-center mb-4">ADMIN LOGIN</h3>
						<form method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
		      			<?php echo $validator->error('username'); ?>
					</div>
	            	
					<div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
				  		<?php echo $validator->error('password'); ?>
					</div>

	            <div class="form-group">
	            	<button type="submit" name="login" value="login" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

