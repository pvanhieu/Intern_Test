<?php
include_once "dbcon.php";
	if(isset($_POST['btnsubmit'])){
		$txtHoten=$_POST['txtHoten'];
		$txtEmail=$_POST['txtEmail'];
		$txtSDT=$_POST['txtSDT'];
		$txtNDLH=$_POST['txtNDLH'];
		
		
		$sql= " INSERT INTO thongtin(Hovaten, Email, SDT, NDLH) VALUES ('$txtHoten','$txtEmail','$txtSDT','$txtNDLH')";
		mysqli_query($conn,$sql);
	}
	mysqli_close($conn);
 ?>
 
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thiet ke form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="">
	<style type="text/css">
		.main-form{
			box-shadow: 0px 0px 10px #666;
			padding: 15px;
			margin-top: 30px;
			border-radius: 10px;
		}
	</style>
</head>
<body >
		<div class="container ">
			<!-- Bắt đầu bằng class row -->
			<div class="row justify-content-center">
				<div class="col-12-col-sm-8 col-md-5">
					<form action="" class="main-form" method="post" id="myForm">
						<h2 class="text-center text-success">Thông tin liên hệ</h2>
						<div class="form-group" >
							<label for="email">Họ và tên</label>
							<input type="text" name="txtHoten" id="txtHoten" class="form-control " >
						</div>
						<div class="form-group" >
							<label for="email">Email</label>
							<input type="text" name="txtEmail" id="txtEmail" class="form-control " >
						</div>
						<div class="form-group">
							<label for="password">Số điển thoại</label>
							<input type="text" name="txtSDT" id="txtSDT" class="form-control " >
						</div>
						<div class="form-group" >
							<label for="ND">Nội dung liên hệ</label>
							<input type="textarea" name="txtNDLH" id="txtNDLH" class="form-control " >
						</div>
						
						<div class="text-center">
							<input type="submit" value="Submit" name="btnsubmit" class="btn btn-success">
							<input type="submit" value="Clear" name="btnclear"  class="btn btn-success">
						</div>

						<?php if(isset($txtHoten)){
							echo '<p>Họ tên: '.$txtHoten.'</p>';
						} ?>
						<?php if(isset($txtEmail)){
							echo '<p>Email: '.$txtEmail.'</p>';
						} ?>
						<?php if(isset($txtSDT)){
							echo '<p>Số điện thoại: '.$txtSDT.'</p>';
						} ?>
						<?php if(isset($txtNDLH)){
							echo '<p>Nội dung liên hệ: '.$txtNDLH.'</p>';
						} ?>
					</form>
				</div>
			</div>
		</div>





	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</body>
</html>