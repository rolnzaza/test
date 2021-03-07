<h1>treetype</h1><hr>
<a href="?page=treetype_add" class="btn btn-primary">เพิ่ม</a><br>
<table class="table table-bordered">
<thead>
	<th scope="col">#</th>
	<th scope="col">ชื่อประเภท</th>
	<th scope="col"></th>
	<th scope="col"></th>
	</thead>
	<?php include("assets/connect.php");?>
<?php

	$sql="select * from tree_type";
	$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	<td><?php echo $row[tree_type_id];?></td>
	<td><?php echo $row[tree_type_name];?></td>
	<td>
		<a href="?page=treetype_del&id=<?php echo $row[tree_type_id];?>" class="btn btn-danger">ลบ</a>
		</td>
	<td><a href="?page=treetype_edit&id=<?php echo $row[tree_type_id];?>" class="btn btn-warning">แก้ไข</a></td>
	</tr>
	
	<?php }?>
</table>