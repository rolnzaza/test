<h1>treetype add</h1><hr>
<?php include("assets/connect.php");?>
<?php
if(isset($_POST['save'])){
	$sql="insert into tree_type (tree_type_name)values('$_POST[name]')";
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("Location:?page=treetype");
}
?>
<form method="post">
<label>ชื่อประเภท</label>
<input type="text" class="form-control" name="name">
<br>
<input type="submit" name="save" class="btn btn-success" value="save">
</form>