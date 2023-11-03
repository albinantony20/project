

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update category set status=2 where  cid=".$bid;

$conn->query($sql);

 header('location:viewcategory.php');



?>

