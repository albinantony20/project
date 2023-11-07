<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<?php require('../config/autoload.php'); ?>
<?php
//include('user_header.php');
?>


	

<?php // include("header.php");	?>




<?php
$dao=new DataAccess();



?>



<?php    
if(isset($_SESSION['username']))
{ 
	include('user_header.php');
	$name=$_SESSION['username'];
}else{
	$name= '';
	include("header.php");
	
}
?>
	
	<div class="plans-section" id="rooms">
				 <div class="container">
 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php  ?>
			<br><br><br><br>
				 <h3 class="title-w3-agileits title-black-wthree">ITEMS</h3><h3><center><a href="special.php" ></a></h3></center>
						<div class="priceing-table-main">
            <?php
			
			 $q="select * from special where status=1";

$info=$dao->query($q);
//print_r($info);

			$i=0;          
			 while($i<count($info))
			
{ $s=$info[$i]["spimage"];
	
		?>		 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src=<?php echo BASE_URL."uploads/".$info[$i]["spimage"]; ?> alt=" " class="img-responsive" />
							<?php /*?> <h4>Deluxe Room</h4><?php */?>
                              <h4><?php echo $info[$i]["spname"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4> 
                              <br><br><br>
							
                             
						</div>
						<div class="price-gd-bottom"><br><br><br><br><br> 
						<h4><center>Rate: <?php echo $info[$i]["spprice"]?> /plate</center></h4>

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
                            
							<a href="spclbooking.php?id=<?= $info[$i]["spid"]?>" >SELECT</a>
							</div>
						</div>
					</div>
				</div>
				<?php 
				$i++;
				} ?>
				<div class="clearfix"> </div>
				<br><br>
			</div>
		</div>
	</div>
	

	
	
	
	