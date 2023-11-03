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
 <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Food Category</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Edit Category</h2>
                                 </div>
                              </div>
                           <div class="full price_table padding_infor_info">
                              <div class="row">
                                 <div class="col-md-6">
                                   <div class="contact_blog">
                                      <h4 class="brief">Category Name</h4>
                                        <?= $form->textBox('cname',array('class'=>'form-control')); ?>
                                        <?= $validator->error('cname'); ?>

                                        <br>
                                      <h4 class="brief">Category Image</h4>
                                        <?= $form->fileField('cimage',array('class'=>'form-control')); ?>
                                        <span style="color:red;"><?= $validator->error('cimage'); ?></span>
                                        <br>

<button type="submit" class="btn btn-success" name="insert"> Submit </button>
</form>

</div>
                              </div>
                           </div>
                        </div>
</body>

</html>


