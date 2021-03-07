<h1>treetype del</h1>
<?php include("assets/connect.php");?>
<?php
$sql="delete from tree_type
	where tree_type_id = '$_GET[id]'
	";
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("Location:?page=treetype");
?>