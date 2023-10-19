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
<br>
<div class="row">
                    <div class="col-md-6">
Special Food Name:

<?= $form->textBox('spname',array('class'=>'form-control')); ?>
<?= $validator->error('spname'); ?>

</div>
</div>
<br>
<div class="row">
                    <div class="col-md-6">
Special Food Image:

<?= $form->fileField('spimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('spimage'); ?></span>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
Special Food Price:

<?= $form->textBox('spprice',array('class'=>'form-control')); ?>
<?= $validator->error('spprice'); ?>

</div>
</div>
<br>
<button type="submit" name="insert">Submit</button>
</form>


</body>

</html>


