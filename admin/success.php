

<?php	
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update booking set status=4 where status=3 and  bid=".$bid;

$conn->query($sql);

 header('location:viewbooking.php');



?>

