<?php
include("dbcon.php");
require('../config/autoload.php');
$dao=new DataAccess();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Heavens Caterers</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../all_user_assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../all_user_assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../all_user_assets/css/custom.css">
    <script>
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>

	<?php require('userheader2.php');?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
	  


    }

	.dropdown-item:hover {
      background-color: #d0a772; /* Change the background color when mouse is placed over the dropdown menu */
	}

  </style>
</head>
<body>
<div>
<div class="container col-6 mt-5 mb-5">
 <div class="col-lg-12 col-md-12">
 <h1 class="text-center">Heavens Caterers</h1>
                           <h4 class="text-muted text-center">Angamaly</h4>
                           <br>
                                <table border="1"  id="printTable" class="table" >
                                    <thead>
                            <tr>
                             <th style="text-align:left">BillNo.1</th>
                               <th colspan="2" style="text-align:left"></th>
                              <th style="text-align:left" >Date:<?php echo  date("Y/m/d"); ?></th>
                            </tr>
                           <tr>
                         
                        <th>Item Name</th>      
                        <th>Price</th>    
		               	<th>Quantity</th>
                        <th>Total Price</th>
                           </tr>                  
                                    </thead>
                                    <tbody>
                                   
 <?php
$name=$_SESSION['username'] ;

 

$sql = "SELECT * FROM booking WHERE status=3 and uemail='$name'";
$result = $conn->query($sql);


	
	
	
	


if ($result->num_rows > 0) {


 // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
      echo "<tr>  <td>"  . $row["iname"]. "</td> <td>"  . $row["price"]. "</td> <td>" . $row["quantity"]. "</td>  <td>" . $row["totalprice"]. "</td>   
     </tr>";
	  
	    
}
}


 ?>
<tr>
   <td colspan=3>
      <div class="text-center">Grand Total</div>
   </td>
   <td>
      <span><?= $_SESSION['amount'] ?></span>
   </td>
</tbody>
</table>
</div>


<?php


$sql11 =" UPDATE booking SET status=2 WHERE status=1 and umail='$name'" ;

if ($conn->query($sql11) === TRUE) {
	echo "<script> alert('Payment Sucessfully');</script> ";
	 
	
	 }
	 ?>
     <br /><br />

<input type="button" onclick="printData();" value="PRINT"  />

<a href="index.php">HOME</a>
</div>
</div>
   </body>
   </html>



