
<?php
include('user_header.php');
?>

<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();

$name=$_SESSION['username'];

?>
<?php include('userheader2.php'); ?>


    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        <h1><center> BOOKING VIEW</center></h1>
                        
                        <th>SR NO</th>
                        <th>USERNAME</th>
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
       
        'delete'=>array('label'=>'Delete','link'=>'itemdelete2.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid'),

    );

    $condition=" uemail='".$name."' and status=1";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderdate');

    $users=$dao->selectAsTable($fields,'booking as b',$condition,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    
            <form action="" method="POST" enctype="multipart/form-data">
                    <?php           
                 $q="select * from booking where status=1 AND uemail = '".$_SESSION['username']."';";
                 $info=$dao->query($q);
                 $i=0;       
                 $totall = 0;  
                 while($i<count($info))
                    {
                 $totall = $totall + $info[$i]["totalprice"];
                    
                $i++;
                $_SESSION['amount'] = $totall;
                    }
                 ?>
    TOTAL AMOUNT:
    <input type="text" value="<?php echo $totall; ?>" readonly name="total"/> 
<button class="btn btn-success" type="submit"  name="home" ><a href="payment.php">Payment</button>
<button class="btn btn-success" type="submit" style="margin-right: 2px;"  name="book" ><a href="category_index.php">Cancel</button>

</form>    
            
            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
