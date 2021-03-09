<?php
include("assets/connect.php");
if(isset($_POST['login'])){  //
	$sql="select * from login where login_user = '$_POST[user]' and login_pass = '$_POST[pass]'";
	$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
	//print_r($row);
	if($row[login_id]!=""){
		header("Location:home.php");
	}else{
		echo "<script>alert('ไม่สามารถเข้าสู่ระบบได้')</script>";
	}
	
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
	  <div class="row">
		  <div class=col-sm-4></div>
		  <div class=col-sm-4><br><br><br>
		  <form method="post">
		<label>user</label>
<input type="text" class="form-control" name="user">
		<label>password</label>
<input type="password" class="form-control" name="pass">
			 <br>
<input type="submit" value="login" name="login" class="btn btn-success">
			  </form>
		  </div>
		  <div class=col-sm-4></div>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
