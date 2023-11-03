

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update special set status=2 where  spid=".$bid;

$conn->query($sql);

 header('location:viewspcl.php');



?>

