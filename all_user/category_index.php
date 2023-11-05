
<?php

?>


	

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
<?php 
 //<h7 class="title-w3-agileits title-black-wthree"> ?>
	<?php  //echo $name </h7> ?>



<div class="plans-section" id="rooms">
				 <div class="container">
			<br>
				 <h3 class="title-w3-agileits title-black-wthree">CATEGORY</h3>
						<div class="priceing-table-main">
            <?php
			
			 $q="select * from category";

$info=$dao->query($q);
//print_r($info);

			$i=0;          
			 while($i<count($info))
			
{ $s=$info[$i]["cimage"];
	
		?>		 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img width="300px" src=<?php echo BASE_URL."uploads/".$info[$i]["cimage"]; ?> alt=" " class="img-responsive" />
							<?php /*?> <h4>Deluxe Room</h4><?php */?>
                              <h4><?php echo $info[$i]["cname"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4> 
                              <br><br><br><h4></h4> 
							
                             
						</div>
						<div class="price-gd-bottom"><br><br><br><br><br> 
							   <div class="price-list">
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

								     </ul>
							</div>
							<div class="price-selet">
							<a href="dispaly_itemdescription.php?id=<?= $info[$i]["cid"]?>">VIEW</a>         
			
							</div>
						</div>
					</div>
				</div>
				<?php 
				$i++;
				} ?>
				<div class="clearfix"> </div><h3><center>
				 <a href="special_index.php" >Special Foods>>></a></h3></center><br><br>
			</div>
		</div>
	</div>
	
	
		<?php //include("footer.php");	?>
	
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+9198470111
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							heavenscatering@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							 Angamaly,Aluva Rd Kerala 683587
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
<?php
include('user_footer.php');
?>  