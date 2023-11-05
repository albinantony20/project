
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
                              <h2>Food Item</h2>
                           </div>
                        </div>
                     </div>
<div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>View Food Item</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped projects">
                                             <thead class="thead-dark">
                                                <tr>
                                                   <th>Item ID</th>
                                                   <th>Item  Name</th>
                                                   <th>Item Image</th>
                                                   <th>Item Price</th>
                                                   <th>Edit/Delete</th>
                                                </tr>
                                             </thead>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'edititem.php','params'=>array('id'=>'item_id'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'itemdelete.php','params'=>array('id'=>'item_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('item_id'),
        'images'=>array(array('field'=>'item_image', 'path'=>'../uploads/', 'attributes'=>array('height'=>'100'))),
        
        
    );

   
   $join=array(
        
    );
     $fields=array('item_id','item_name','item_image','item_price');

    $users=$dao->selectAsTable($fields,'item',"status=1",$join,$actions,$config);
    
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
    
    
