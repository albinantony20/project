<?php 

 require('../config/autoload.php'); 
include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','item','item_id='.$_GET['id']);
$file=new FileUpload();
$elements=array(
    "item_name"=>$info[0]['item_name'],"item_image"=>"","item_price"=>$info[0]['item_price'],);


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('item_name'=>"Item Name",'item_image'=>"Item Image",'item_price'=>"Item Price");

$rules=array(
    "item_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaspaceonly"=>true),
    "item_image"=>array(),
    "item_price"=>array("required"=>true,"minlength"=>1,"maxlength"=>6,"integeronly"=>true),
);

    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{

    if(isset($_FILES['item_image']['name']))
    {
        if($fileName=$file->doUploadRandom($_FILES['item_image'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))
        {
            $flag=true;
            
        }
}
$data=array(

    'item_name'=>$_POST['item_name'],
    'item_price'=>$_POST['item_price'],
 
);
$condition='item_id='.$_GET['id'];
if(isset($flag))
        {	$data['item_image']=$fileName;
    
        }


if($dao->update($data,'item',$condition))
{
    $msg="Successfullly Updated";

}
else
    {$msg="Failed";} 
}

}

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


