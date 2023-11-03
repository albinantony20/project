<?php 

require('../config/autoload.php'); 
include("header.php");	?>
<?php 
include("dbcon.php");
?>

<?php

$dao=new DataAccess();
$date1=$_SESSION['fdate'] ;
 $date2=$_SESSION['fdate'] ;

?>
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Datewise Report</h2>
                           </div>
                        </div>
                     </div>
<div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Orders</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped projects">
                                             <thead class="thead-dark">
                                                <tr>
                                                   <th>S No</th>
                                                   <th>Item  Name</th>
                                                   <th>Booking Date</th>
                                                   <th>Order Date</th>
                                                   <th>Quantity</th>
                                                </tr>
                                             </thead>
<?php
    
    $actions=array(
    
    
    
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid')
        
        
    );

   $condition="orderdate='".$date1."' and status=3";
   
   $join=array(
       
    );  
	$fields=array('bid','iname','bookingdate','orderdate','quantity');

    $users=$dao->selectAsTable($fields,'booking as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


        
<form action="" method="POST" enctype="multipart/form-data">

<?php
//<button class="btn btn-success" type="submit"  name="purchase" >Home</button>
?>

</form>
</table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
    


             
                </table>
            </div>    

            
            
            
         
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

