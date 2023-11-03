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
<br>
<div class="row">
                    <div class="col-md-6">
Item Name:

<?= $form->textBox('item_name',array('class'=>'form-control')); ?>
<?= $validator->error('item_name'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Category name:

<?php
                    $options = $dao->createOptions('cname','cid',"category");
                    echo $form->dropDownList('cid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid'); ?>

</div>
</div>

<br>
<div class="row">
                    <div class="col-md-6">
Item Image:

<?= $form->fileField('item_image',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('item_image'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Item Price:

<?= $form->textBox('item_price',array('class'=>'form-control')); ?>
<?= $validator->error('item_price'); ?>

</div>
</div>
<br>
<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


