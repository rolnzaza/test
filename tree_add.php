<h1>tree add</h1><hr>
<?php include("assets/connect.php");?>
<?php
if(isset($_POST['save'])){
	$img_name = "tree-".date("U");
	$file = $_FILES['file']['name'];
	if($file!=""){
$img_type = explode(".",$file);
$image = $img_name.".".$img_type[count($img_type)-1];
copy($_FILES['file']['tmp_name'],"file/$image");
chmod("file/$image",0777);
	}
$date = date("Y-m-d H:i:s");
$sql="insert into tree
(tree_name,tree_name_eng,tree_type_id,tree_image,tree_date)
values
('$_POST[name]','$_POST[nameeng]','$_POST[type]','$image','$date')";
	//echo $sql;
mysqli_query($con,$sql)or die(mysqli_error($con));
header("Location:?page=tree");
}
?>
<form method="post" enctype="multipart/form-data">
<label>ชื่อ</label>
<input type="text" class="form-control" name="name">
<label>ชื่อ Eng</label>
<input type="text" class="form-control" name="nameeng">
	
	
	
	
<label>ประเภทต้นไม้</label>
<select name="type" class="form-control">
	<?php

	$sql="select * from tree_type";
	$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	while($row = mysqli_fetch_array($result)){
	?>
	<option value="<?php echo $row[tree_type_id];?>"><?php echo $row[tree_type_name];?></option>
	<?php }?>
	</select>
<label> รูปภาพ</label>
<input type="file" name="file" class="form-control-file">
	
	
	
	
<br>
<input type="submit" name="save" class="btn btn-success" value="save">
</form>