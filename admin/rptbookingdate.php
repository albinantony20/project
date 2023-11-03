<?php 



 require('../config/autoload.php'); 
include("header.php");

//session_start();
$elements=array(
        "fdate"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("fdate"=>"from Date");

$rules=array(
    
    "fdate"=>array('required'=>true,'date'=>array('from'=>'today','to'=>'+30 days 12 am')),
    
 

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
 $_SESSION['fdate']=$_POST['fdate'];


 echo"<script >location.href = 'rptbookingdateview.php'</script>";

       
}

}


?>
<html>
<head>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
 <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Datewise Report</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Orders</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                              <div class="row">
                                 <div class="col-md-6">
                                   <div class="contact_blog">
                                      <h4 class="brief">From Specific Date</h4>
<?= $form->inputBox('fdate',array('class'=>'form-control'),"date") ?>
<span style="color:red;"><?= $validator->error('fdate'); ?></span>

<br>
<button type="submit" class="btn btn-success" name="btn_insert"  >Submit</button>
</form>


</body>

</html>