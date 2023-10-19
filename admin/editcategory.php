<?php 

 require('../config/autoload.php'); 
include("header.php");
$dao=new DataAccess();
$info=$dao->getData('*','category','cid='.$_GET['id']);
$file=new FileUpload();
$elements=array(
    "cname"=>$info[0]['cname'],"cimage"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('cname'=>"Category Name",'cimage'=>"Category Image");

$rules=array(
    "cname"=>array("required"=>true,"minlength"=>2,"maxlength"=>30,"alphaspaceonly"=>true),
    "cimage"=>array(),
);

    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["insert"]))
{

if($validator->validate($_POST))
{

    if(isset($_FILES['cimage']['name']))
    {
        if($fileName=$file->doUploadRandom($_FILES['cimage'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))
        {
            $flag=true;
            
        }
}
$data=array(

    'cname'=>$_POST['cname'],
 
);
$condition='cid='.$_GET['id'];
if(isset($flag))
        {	$data['cimage']=$fileName;
    
        }


if($dao->update($data,'category',$condition))
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
Category Name:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>
<br>
<div class="row">
                    <div class="col-md-6">
Category Image:

<?= $form->fileField('cimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('cimage'); ?></span>

</div>
</div>

<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


