<!DOCTYPE html>
<html lang="en">
<?php 
 require('../config/autoload.php'); 
 $_SESSION['view']='view';
if(!isset($_SESSION['username']))
{ 
header('location:register.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css">
    
    <?php
   
include('user_header.php');
?>
    <script>
    function showtotal() 
        {
               //alert("hai")
	           var price=document.getElementById("price").value;  
	           var qty=document.getElementById("qty").value; 
	           var total=price*qty; 
	           //alert(total);
	               document.getElementById("total").value = total;
        }   
    </script>
</head>

<body>
<?php

//include("header.php");	
include("dbcon.php");

?>

<?php 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
if(isset($_POST["btn_insert"]))
{
if(!isset($_SESSION['username']))
   {
	   header('location:login.php');
  }
  else
  { 
    $uemail=$_SESSION['username'];
    $iid = $_GET['id'];
    $q="select * from item where item_id=".$iid ;
    $info1=$dao->query($q);
    $iname=$info1[0]["item_name"];
    $price=$info1[0]["item_price"];
    $quantity=$_POST["qty"];
    $totalprice=$_POST["total"];
    $_SESSION['amount']=$totalprice;

    $bookingdate=date('Y-m-d',time());
    $orderdate=$_POST["orderdate"];
    
   
    $status=1;
    $sql = "INSERT INTO booking(uemail,iid,iname,price,quantity,totalprice,bookingdate,orderdate,status) 
    VALUES ('$uemail','$iid','$iname','$price','$quantity','$totalprice','$bookingdate','$orderdate','$status')";
                                   
    $conn->query($sql);
    echo $sql;
 echo"<script >location.href = 'viewbooking.php'</script>";

}
}

if(isset($_POST["book_now"]))
{
if(!isset($_SESSION['username']))
   {
	   header('location:login.php');
  }
  else
  { 
    $uemail=$_SESSION['username'];
    $iid = $_GET['id'];
    $q="select * from item where item_id=".$iid ;
    $info1=$dao->query($q);
    $iname=$info1[0]["item_name"];
    $price=$info1[0]["item_price"];
    $quantity=$_POST["qty"];
    $totalprice=$_POST["total"];
    $_SESSION['amount']=$totalprice;

    $bookingdate=date('Y-m-d',time());
    $orderdate=$_POST["orderdate"];
    
   
    $status=1;
    $sql = "INSERT INTO booking(uemail,iid,iname,price,quantity,totalprice,bookingdate,orderdate,status) 
    VALUES ('$uemail','$iid','$iname','$price','$quantity','$totalprice','$bookingdate','$orderdate','$status')";
                                   
    $conn->query($sql);
    echo $sql;
 echo"<script >location.href = 'viewbookingnext.php'</script>";

}
}
?>


<?php
$dao=new DataAccess();
?>

<?php	$iid=$_GET['id']; 
	 $q="select * from item where item_id=".$iid ;
    $info=$dao->query($q);
  
?>
 
    
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">

 
<?php 
if(isset($_SESSION['username']))
{ 
   $name=$_SESSION['username'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php } ?>
            <h3>Product Details</h3>
            <img width="540" src=<?php echo BASE_URL."uploads/".$info[0]["item_image"]; ?> alt=" ">
        
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="inner-column">
        <form action="" method="POST" enctype="multipart/form-data">
            <h3>Details</h3>
            <div class="form-group">
                <label for="name">itemname:</label><br>
                <input id="iname" name="Item Name" type="text" value="<?php echo $info[0]["item_name"];?>"  readonly style="margin-top: 8px;"><br>
            </div>
            <div class="form-group">
                <label for="Total">price</label><br>
                <input id="price" name="price" type="text" value="<?php echo $info[0]["item_price"];?>"  readonly style="margin-top: 8px;"><br>
            </div>
            <div class="form-group">
                <label for="quantity">quantity</label><br>
                <input id="qty" name="qty" type="text" onkeyup="showtotal()"  style="margin-top: 8px;"><br>
            </div>
            <div class="form-group">
                <label for="totalprice">totalprice</label><br>
                <input id="total" name="total" type="text"  style="margin-top: 8px;"><br>
            </div>
            <div class="form-group">
                <label for="">orderdate</label><br>
                <input id="orderdate" name="orderdate" type="date"   style="margin-top: 8px;"><br>
            </div>
                    <button type="submit" class="btn btn-success" name="btn_insert">Add to Cart</button>
                    <button type="submit" class="btn btn-success" name="book_now">Book Now</button>
            </form>      
        </div>
        </div>
    </div>
</div>
