
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
                              <h2>Food Category</h2>
                           </div>
                        </div>
                     </div>
<div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>View Category</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped projects">
                                             <thead class="thead-dark">
                                                <tr>
                                                   <th>Category ID</th>
                                                   <th>Category Name</th>
                                                   <th>Category Image</th>
                                                
                                                   <th>Edit/Delete</th>
                                                </tr>
                                             </thead>
                                             
                                             <?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'editcategory.php','params'=>array('id'=>'cid'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'Delete','link'=>'categorydelete.php','params'=>array('id'=>'cid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('cid'),
        'images'=>array(array('field'=>'cimage', 'path'=>'../uploads/', 'attributes'=>array('height'=>'100'))),
        
        
    );

   
   $join=array(
        
    );
     $fields=array('cid','cname','cimage');

    $users=$dao->selectAsTable($fields,'category',"status=1",$join,$actions,$config);
    
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
    
    
