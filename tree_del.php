<h1>tree del</h1>
<?php include("assets/connect.php");?>
<?php
$sql="delete from tree
	where tree_id = '$_GET[id]'
	";
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("Location:?page=tree");
?>