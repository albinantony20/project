<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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

<div class="plans-section" id="rooms">
				 <div class="container">
			<br><br><br><br><br>
				 <h3 class="title-w3-agileits title-black-wthree">CATEGORY</h3>
						<div class="priceing-table-main">
							
            <?php
			
			 $q="select * from category";

$info=$dao->query($q);
//print_r($info);

			$i=0;          
			 while($i<count($info))
			
{ $s=$info[$i]["cimage"];
	
		?>	
			 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img width="300"; height="300" src=<?php echo BASE_URL."uploads/".$info[$i]["cimage"]; ?> alt=" " class="img-responsive" />
							<?php /*?> <h4>Deluxe Room</h4><?php */?>
                              <h4><?php echo $info[$i]["cname"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4> 
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
				<br><br>
				<div class="clearfix"> </div><h3><center>
				<br><br><br>
				<a href="special_index.php" >Explore Special Foods</a></h3></center><br><br>
				
			</div>
			<br>
		</div>
	</div>
	
	
		<?php //include("footer.php");	?>
	
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
