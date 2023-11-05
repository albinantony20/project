<?php 

 require('../config/autoload.php'); 
include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','special','spid='.$_GET['id']);
$file=new FileUpload();
$elements=array(
    "spname"=>$info[0]['spname'],"spimage"=>"","spprice"=>$info[0]['spprice']);


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('spname'=>"Item Name",'spimage'=>"Item Image",'spprice'=>"Item Price");

$rules=array(
    "spname"=>array("required"=>true,"minlength"=>2,"maxlength"=>30),
    "spimage"=>array(),
    "spprice"=>array("required"=>true,"minlength"=>1,"maxlength"=>6,"integeronly"=>true),
);

    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{

    if(isset($_FILES['spimage']['name']))
    {
        if($fileName=$file->doUploadRandom($_FILES['spimage'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))
        {
            $flag=true;
            
        }
}
$data=array(

    'spname'=>$_POST['spname'],
    'spprice'=>$_POST['spprice'],
 
);
$condition='spid='.$_GET['id'];
if(isset($flag))
        {	$data['spimage']=$fileName;
    
        }


if($dao->update($data,'special',$condition))
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

<?= $form->textBox('spname',array('class'=>'form-control')); ?>
<?= $validator->error('spname'); ?>

</div>
</div>
<br>
<div class="row">
                    <div class="col-md-6">
Item Image:

<?= $form->fileField('spimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('spimage'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Item Price:

<?= $form->textBox('spprice',array('class'=>'form-control')); ?>
<?= $validator->error('spprice'); ?>

</div>
</div>
<br>
<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


