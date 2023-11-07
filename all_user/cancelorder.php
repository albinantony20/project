
<?php require('../config/autoload.php'); ?>
<?php
include('user_header.php');
?>
<?php
$dao=new DataAccess();
$name=$_SESSION['username'];
?>



<?php include('userheader2.php'); ?>

<br><br><br><br><br>
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:25px;">
                    <tr>
                        <h1><center>CANCELLED ORDERS</center></h1>
                        
                        <th>SR NO</th>

                        <th>ITEM NAME</th>
                        <th>PRICE</th>
                       
                        <th>QUANTITY</th>
                        <th>TOTAL PRICE</th>
                        <th>BOOKING DATE</th>
                        <th>ORDER DATE</th>
                      
                        

                    </tr>
<?php
    
    $actions=array(
       // 'Cancel'=>array('label'=>'Cancel','link'=>'cancelbutton.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid','uemail','iid'), 


    );

    $condition=" uemail='".$name."' and status=5";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderdate');

     $users=$dao->selectAsTable($fields,'booking',$condition,$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    



    
            
            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
