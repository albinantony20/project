-+
<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();



?>
<?php include('header.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-11">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Item Id</th>
                        <th>Item Name</th>
                        <th>Item Image</th>
                        <th>Item Price</th>
                        
                        <th>EDIT/DELETE</th>
                     
                      
                    </tr>
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

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
