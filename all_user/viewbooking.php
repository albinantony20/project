
<?php require('../config/autoload.php'); ?>
<?php
include('user_header.php');
?>
<?php
$dao=new DataAccess();
$name=$_SESSION['username'];
if(isset($_POST['home']))
{
 $bid = $_SESSION['uemail'];

 $data=array(
    'status'=>6
 );
 // $sql = "update booking set status=6 where status=1 and  uemail=".$bid;
 $dao->update($data,'booking','status=1 and  uemail="'.$bid.'"');
 
 echo "<script>location.replace('Payment.php');</script>";
}


?>



<?php include('userheader2.php'); ?>

<br><br><br><br><br>
    <div class="container_gray_bg mb-5" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:25px;">
                    <tr>
                        <h1><center>CART</center></h1>
                        
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
        'delete'=>array('label'=>'Delete','link'=>'itemdelete.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success'))
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bid','uemail','iid'), 


    );

    $condition=" uemail='".$name."' and status=1 OR uemail='".$name."' and status=6";
    $join=array(
       
    ); 
     $fields=array('bid','uemail','iid','iname','price','quantity','totalprice','bookingdate','orderdate');

     $users=$dao->selectAsTable($fields,'booking',$condition,$join,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>
</div>
<div class="row">
<div class=" col-12 d-flex justify-content-between">
    <div class="mr-0">
                    <?php           
                 $q="select * from booking where status=1 AND uemail = '".$_SESSION['username']."' OR status=6 AND uemail = '".$_SESSION['username']."';";
                 $info=$dao->query($q);
                 $i=0;       
                 $totall = 0;  
                 if(!empty($info)){

                     while($i<count($info))
                     {
                         $totall = $totall + $info[$i]["totalprice"];
                         
                         $i++;
                         $_SESSION['amount'] = $totall;
                        }
                    }
                        ?>
<a class="btn btn-success" type="submit" style="margin-left: 15px;"  name="book" href="category_index.php">Add Item</a>
<a href="special_index.php" class="btn btn-success" style="margin-left: 15px;">Add Special Item</a>   
                </div>
                <div class="align-items-end">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="justify-content-between">
                    <span class="ml-2">TOTAL AMOUNT:</span>
                    <div class="mb-2">
                        <input type="text" class="form-control" value="<?php echo $totall; ?>" readonly name="total">
                    </div>
<button class="btn btn-success" type="submit"  name="home" value="sub" >Payment</button>
                </div>
</form>    
            
            
                </div>
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
