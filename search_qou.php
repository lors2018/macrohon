<?php
include("function.php");

if (isset($_POST['search_qou']))
{
	$Qouref = $_POST['search'];
	$query = "SELECT * FROM data1 WHERE Qouref LIKE '%$searchKey';
	$result = mysqli_query($con,$query);
	$searchKey = $_POST['search']

}





?>