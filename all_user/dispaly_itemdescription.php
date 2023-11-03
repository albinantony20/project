

<?php include("user_header.php");	?>



<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
	
	<div class="plans-section" id="rooms">
				 <div class="container">
<?php				 
if(isset($_SESSION['username']))
{ 
	include("userheader2.php");
   $name=$_SESSION['username'];
}
else

?>


<?php } ?>
<h3 class="title-w3-agileits title-black-wthree">ITEMS</h3>
						<div class="priceing-table-main">
            <?php
			$item_id=$_GET['id']; 
			 $q="select * from item where cid=".$item_id ;

$info=$dao->query($q);

			$i=0;          
			 while($i<count($info))
			
{ $s=$info[$i]["item_image"];
		?>		 <div class="col-md-3 price-grid">
					<div class="price-block agile">

						<div class="price-gd-top">
						<img style="width:300; height:300" src=<?php echo BASE_URL."uploads/".$info[$i]["item_image"]; ?> alt=" " class="img-responsive" />
							<?php /*?> <h4>Deluxe Room</h4><?php */?>
<h4>Item name:  </h4>
                              <h4><?php echo $info[$i]["item_name"]?></h4> 
                              <br><br><br><br><br><br><br>
                             
						</div>

                        <h4><center>Rate: <?php echo $info[$i]["item_price"]?> /plate</center></h4>
						<div class="price-gd-bottom">
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
                            
			<a href="itembooking.php?id=<?= $info[$i]["item_id"]?>" >BOOK NOW</a>
		
							</div>
						</div>
					</div>
				</div>
				<?php 
				$i++;
				} ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
		<?php //include("user_footer.php");	?>
	