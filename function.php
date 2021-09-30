<?php 
$con = mysqli_connect("localhost","root","","macro");


//add new qoutation
if (isset($_POST['submit'])) {
	# code...
	$Qouref = $_POST['Qouref'];
	$Date = Date('y-m-d', strtotime($_POST['Date']));
	$Qouloc = $_POST['Qouloc'];
	$QouPhone = $_POST['QouPhone'];
	$QouFax = $_POST['QouFax'];
	$Projectname = $_POST['Projectname'];

$query = "INSERT INTO data1 ( Qouref, Date, Qouloc, QouPhone, QouFax, Projectname) VALUES ('$Qouref','$Date','$Qouloc','$QouPhone','$QouFax','$Projectname')";
$result = mysqli_query($con,$query);
if ($result) {
	# code...
		
		echo "<script>alert('Data is successfully Inserted')</script>";	
		echo "<script>window.open('add.php','_self')</script>";
}else{
	echo "<script>alert('Data is unsuccessfully Inserted')</script>";

}

}



//add new item
if (isset($_POST['submit_item'])) {
	# code...
	$Qouref = $_POST['Qouref'];
	$descriptions = $_POST['descriptions'];
	$qty = $_POST['qty'];
	$unitprice = $_POST['unitprice'];
	$netprice = $_POST['netprice'];
	$total = $_POST['total'];

$query = "INSERT INTO data2 ( Qouref, descriptions, qty, unitprice, netprice, total) VALUES ('$Qouref','$descriptions','$qty','$unitprice','$netprice','$total')";
$result = mysqli_query($con,$query);
if ($result) {
	# code...
		
		echo "<script>alert('Item is successfully Inserted')</script>";	
		echo "<script>window.open('add_item.php','_self')</script>";
}else{
	echo "<script>alert('Item is unsuccessfully Inserted')</script>";

}

}

















?>