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
                       
                        
                        <th>SR NO</th>
                        <th>USER NAME</th>
                        <th>ITEM ID</th>
                        <th>ITEM NAME</th>
                        <th>PRICE</th>
                       
                        <th>QUANTITY</th>
                        <th>TOTAL PRICE</th>
                        <th>BOOKING DATE</th>
                        <th>ORDER DATE</th>
                      
                        

                    </tr>
<?php
    
    $actions=array(
        
        //'delete'=>array('label'=>'Deliver','link'=>'cancel.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition="status=3";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderdate');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
                
            </div>    
            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
