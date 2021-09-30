<?php

$con = mysqli_connect("localhost","root","","macro");

$id = $_GET['update'];
if (isset($_POST['submit'])) {
	# code...
	$Qouref = $_POST['Qouref'];
	$Date = Date('y-m-d', strtotime($_POST['Date']));
	$Qouloc = $_POST['Qouloc'];
	$QouPhone = $_POST['QouPhone'];
	$QouFax = $_POST['QouFax'];
	$Projectname = $_POST['Projectname'];

$query = "Update 'data1' set id=$id, Qouref='$Qouref', Date='$Data', Qouloc='$Qouloc', QouPhone='QouFax='$QouFax', Projectname='$Projectname' where id=$id";
$result = mysqli_query($con,$query);
if ($result) {
	# code...
		
		header("location: index.php");
}else{
	die(mysqli_error($con));

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>ADD NEW QOUTATION</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 2%;">
				<div class="row">
				<form action="" method="POST"> 

				</form>
				<br>
				<br>
				<br>
				<br>
				</div>
		<form method="POST" action="update.php">
			<div class="col-md-6">
						<input type="text" name="Qouref" class='form-control' placeholder="Qoutation Ref" value="" > 
					</div>
					<br>
					<br>
					<div class="col-md-6">
						<input type="date" name="Date" class='form-control' placeholder="Date" value="" > 
					</div>
					<br>
					<br>
					<div class="col-md-6">
						<input type="text" name="Qouloc" class='form-control' placeholder="Location" value="" > 
					</div>
					<br>
					<br>
					<div class="col-md-6">
						<input type="text" name="QouPhone" class='form-control' placeholder="Phone" value="" > 
					</div>
					<br>
					<br>
					<div class="col-md-6">
						<input type="text" name="QouFax" class='form-control' placeholder="Fax" value="" > 
					</div>
					<br>
					<br>
					<div class="col-md-6">
						<input type="text" name="Projectname" class='form-control' placeholder="Project Name" value="" > 
					</div>
					<br>
					<br>
					<br>
			
			<div class="col-md-6 text-center">
						<input type="submit"  class="btn btn-primary"name="submit" value="Update">
					</div>
					</div>
			</div>
		</div>
	</div>
		</form>
</body>
</html>