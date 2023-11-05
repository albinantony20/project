<?php 

 require('../config/autoload.php'); 
include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','item','item_id='.$_GET['id']);
$file=new FileUpload();
$elements=array(
    "item_name"=>$info[0]['item_name'],"cid"=>$info[0]['cid'],"item_image"=>"","item_price"=>$info[0]['item_price'],);


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('item_name'=>"Item Name",'cid'=>"cid",'item_image'=>"Item Image",'item_price'=>"Item Price");

$rules=array(
    "item_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaspaceonly"=>true),
    "cid"=>array("required"=>true,),
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
    'cid'=>$_POST['cid'],
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



</body>

</html>


