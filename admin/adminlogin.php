<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();

$rules=array(
	'username'=>array('required'=>true),
	'password'=>array('required'=>true)
);
$validator=new formValidator($rules);
if(isset($_POST['signin']))
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
		header('location:parlour.php');
		}
		else
		{
		echo "<script> alert('invalid username or password');</script>";
		}

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="registration/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="registration/css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="salon-signup">
                        <figure><img src="registration/images/salon-signup.jpg" alt="sing up image"></figure>
              
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <!--<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>--><td>Username</td>
			<td><input type="text" name="username" ></td>
			<td> <?php echo $validator->error('username'); ?> </td>
                            </div>
                            <div class="form-group">
                               <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>-->			<td>Password</td>
			<td><input type="password" name="password" /></td>
			<td> <?php echo $validator->error('password'); ?> </td>
                            </div>
                            <div class="form-group">
                               <!-- <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>-->
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                               
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="registration/vendor/jquery/jquery.min.js"></script>
    <script src="registration/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<html>
<!--
			<head>
<style>
	body{background-image:url("img.jpg");  
		background-position: center;
  		background-repeat: no-repeat;
  		background-size: cover;
		height:100%; }
</style>
	</head>
	<body>
		<form method="post">
		<table align="center" style="margin-top:100px;">
	
			<center><h1 style="text-decoration:underline;">ADMIN LOGIN</h1></center>
			<tr>
			<td>Username</td>
			<td><input type="text" name="username" ></td>
			<td> <?php echo $validator->error('username'); ?> </td>
			</tr>
			<tr>
			<td>Password</td>
			<td><input type="password" name="password" /></td>
			<td> <?php echo $validator->error('password'); ?> </td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="login" value="login" ></td> 
				
			<td></td>
			</tr>
		</table>
	</form>
	</body>
</html>-->