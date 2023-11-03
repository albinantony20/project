<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
    "spname"=>"","spimage"=>"","spprice"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('spname'=>"Special Food Name",'spimage'=>"Special Food Image",'spprice'=>"Special Food Price");

$rules=array(
    "spname"=>array("required"=>true,"minlength"=>2,"maxlength"=>30),
    "spimage"=>array("filerequired"=>true),
    "spprice"=>array("required"=>true,"minlength"=>1,"maxlength"=>6,"integeronly"=>true)
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{

    if($fileName=$file->doUploadRandom($_FILES['spimage'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))	
    {
	


$data=array(

       
        'spname'=>$_POST['spname'],
        'spimage'=>$fileName,
        'spprice'=>$_POST['spprice'],


        
         
    );

    print_r($data);
  
    if($dao->insert($data,"special"))
    {
        echo "<script> alert('New record created successfully'); </script> ";

    }
    else
    {
        $msg="Registration failed";
        
    } 
        
        ?>

   
    
<?php
    
}
else
echo $file->errors();
}}




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
                              <h2>Special Food</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add Special Food</h2>
                                 </div>
                              </div>
                           <div class="full price_table padding_infor_info">
                              <div class="row">
                                 <div class="col-md-6">
                                   <div class="contact_blog">
                                      <h4 class="brief">Item Name</h4>

<?= $form->textBox('spname',array('class'=>'form-control')); ?>
<?= $validator->error('spname'); ?>



<br>
<h4 class="brief">Item Image</h4>

<?= $form->fileField('spimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('spimage'); ?></span>


<br>
<h4 class="brief">Item Price</h4>

<?= $form->textBox('spprice',array('class'=>'form-control')); ?>
<?= $validator->error('spprice'); ?>


<br>
<button type="submit" class="btn btn-success" name="insert">Submit</button>
</form>
</div>
                              </div>
                           </div>
                        </div>

</body>

</html>


