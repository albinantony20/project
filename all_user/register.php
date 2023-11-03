<?php require('../config/autoload.php'); ?>
<?php //include('header.php'); ?>   
<?php
$dao=new DataAccess();
$rules=array(
	'name'=>array('required'=>true),
    'username'=>array('required'=>true),
    'password'=>array('required'=>true),
    'contact'=>array('required'=>true),
	
);
$labels=array('name'=>"Name","username"=>"Username","password"=>"Password","contact"=>"Contact Number");
$validator=new FormValidator($rules);
$elements=array(
    'name' =>'',
	'username'=>'',
	'password' =>'',
    'contact' =>'',
    
   
    
	);
$form = new FormAssist($elements,$_POST);

if(isset($_POST['signup']))
{
	
	if($validator->validate($_POST))
	{
	$data=array(
        'name'=>$_POST['name'],
		'username'=>$_POST['username'],
		'password'=>$_POST['password'],
        'contact'=>$_POST['contact'],
  
		);
		$table='login';
		if($dao->insert($data,'login'))
        {
        	//$msg="Registered successfully";
		echo "<script> alert('New record created successfully');</script> ";
		
		}
		
		else
			echo "<script> alert('Something went wrong');</script> ";
		//$msg="error";
		header('location:login.php');	
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="registration/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="registration/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                               <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
			                    <?php echo $validator->error('name') ?>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" required/>
			                    <?php echo $validator->error('username') ?>
                            </div>
                            <div class="form-group">
                                <label for="contact"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="contact" id="contact" placeholder="Your Phone Number" required/>
                                <?php echo $validator->error('contact') ?>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
			                    <?php echo $validator->error('password') ?>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                <?php if(isset($msg))echo "<script>alert(msg);</script> "; ?>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="registration/images/heavens.png" alt="sign up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                        <a href="index.php" class="signup-image-link">Back to Home</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="reistration/vendor/jquery/jquery.min.js"></script>
    <script src="registration/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>