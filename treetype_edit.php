<h1>treetype edit</h1><hr>
<?php include("assets/connect.php");?>
<?php
if(isset($_POST['save'])){
	$sql="update tree_type 
	set 
	tree_type_name = '$_POST[name]'
	where tree_type_id = '$_GET[id]'
	";
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("Location:?page=treetype");
}
?>
<?php

	$sql="select * from tree_type where tree_type_id = '$_GET[id]'";
	$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
?>
<form method="post">
<label>ชื่อประเภท</label>
<input type="text" class="form-control" name="name" value="<?php echo $row[tree_type_name];?>">
<br>
<input type="submit" name="save" class="btn btn-success" value="save">
</form>