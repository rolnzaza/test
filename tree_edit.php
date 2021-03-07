
<h1>tree edit</h1><hr>
<?php include("assets/connect.php");?>
<?php
if(isset($_POST['save'])){
	$img_name = "tree-".date("U");
	$file = $_FILES[file]['name'];
	//echo $file;
	if($file!=""){
$img_type = explode(".",$file);
$image = $img_name.".".$img_type[count($img_type)-1];
copy($_FILES[file]['tmp_name'],"file/$image");
chmod("file/$image",0777);
	}else{
	$image = $_POST[img_old];
	}
	$sql="update tree 
	set 
	tree_name = '$_POST[name]',
	tree_name_eng = '$_POST[nameeng]',
	tree_type_id='$_POST[type]',
	tree_image = '$image'
	where tree_id = '$_GET[id]'
	";
//echo $sql;
	mysqli_query($con,$sql)or die(mysqli_error($con));
	header("Location:?page=tree");
}
?>
<?php

	$sql="select * from tree where tree_id = '$_GET[id]'";
	$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
?>
<form method="post" enctype="multipart/form-data">
<label>ชื่อ</label>
<input type="text" class="form-control" name="name" value="<?php echo $row[tree_name];?>">
	<label>ชื่อ Eng</label>
<input type="text" class="form-control" name="nameeng" value="<?php echo $row[tree_name_eng];?>">
	
	<label>ประเภทต้นไม้</label>
<select name="type" class="form-control">
	<?php

	$sql2="select * from tree_type";
	$result2 = mysqli_query($con,$sql2)or die(mysqli_error($con));
	while($row2 = mysqli_fetch_array($result2)){
	?>
	<option 
<?php if($row[tree_type_id]==$row2[tree_type_id]){echo 'selected';} ?>
			
			value="<?php echo $row2[tree_type_id];?>"><?php echo $row2[tree_type_name];?></option>
	<?php }?>
	</select>
<label> รูปภาพ</label>
<input type="file" name="file" class="form-control-file">
<input type="hidden" name="img_old" value="<?php echo $row[tree_image];?>">
<br>
<input type="submit" name="save" class="btn btn-success" value="save">
</form>