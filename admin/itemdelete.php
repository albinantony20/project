

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update item set status=2 where  item_id=".$bid;

$conn->query($sql);

 header('location:viewitem.php');



?>

