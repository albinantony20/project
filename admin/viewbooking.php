<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();



?>
<?php include('header.php'); ?>

    
<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Order Details</h2>
                           </div>
                        </div>
                     </div>
<div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Pending</h2>
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
                                                   <th>User Name</th>
                                                   <th>Item Name</th>
                                                   <th>Item Price</th>
                                                   <th>Quantity</th>
                                                   <th>Total Price</th>
                                                   <th>Booking Date</th>
                                                   <th>Order Date</th>
                                                   <th>Status</th>
                                                </tr>
                                             </thead>
<?php
    
    $actions=array(
        
        'edit'=>array('label'=>'Edit','link'=>'#','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success')),
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition="status=3";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iname','price','quantity','totalprice','bookingdate','orderdate');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
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
    
    
