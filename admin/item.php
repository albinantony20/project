<?php 

 require('../config/autoload.php'); 
include("header.php");

$file=new FileUpload();
$elements=array(
    "item_name"=>"","item_image"=>"","item_price"=>"","cid"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('item_name'=>"Item Name",'item_image'=>"Item Image",'item_price'=>"Item Price",'cid'=>"cname");

$rules=array(
    "item_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaspaceonly"=>true),
    "item_image"=>array("filerequired"=>true),
    "item_price"=>array("required"=>true,"minlength"=>1,"maxlength"=>6,"integeronly"=>true),
    "cid"=>array("required"=>true)
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{

    if($fileName=$file->doUploadRandom($_FILES['item_image'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))	
    {
	


$data=array(

       
        'item_name'=>$_POST['item_name'],
        'item_image'=>$fileName,
        'item_price'=>$_POST['item_price'],
        'cid'=>$_POST['cid'],



        
         
    );

    print_r($data);
  
    if($dao->insert($data,"item"))
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
                              <h2>Food Item</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add Food Item</h2>
                                 </div>
                              </div>
                           <div class="full price_table padding_infor_info">
                              <div class="row">
                                 <div class="col-md-6">
                                   <div class="contact_blog">
                                      <h4 class="brief">Item  Name</h4>
<?= $form->textBox('item_name',array('class'=>'form-control')); ?>
<?= $validator->error('item_name'); ?>

<br>
<h4 class="brief">Category Name</h4>

<?php
                    $options = $dao->createOptions('cname','cid',"category");
                    echo $form->dropDownList('cid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid'); ?>


<br>
<h4 class="brief">Item Image</h4>

<?= $form->fileField('item_image',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('item_image'); ?></span>


<br>
<h4 class="brief">Item Price</h4>


<?= $form->textBox('item_price',array('class'=>'form-control')); ?>
<?= $validator->error('item_price'); ?>

<br>
<button type="submit" class="btn btn-success" name="insert">Submit</button>
</form>

</div>
                              </div>
                           </div>
                        </div>
</body>

</html>


