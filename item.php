<?php
include_once ('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 2%;">
				<div class="row">
				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Quotation" value="" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Items No.</th>
						<th>Quotation Reference</th>
						<th>Descriptions</th>
						<th>QTY</th>
						<th>Unit Price</th>
						<th>Net Price</th>
						<th>Total</th>
						

					</tr>

				<?php
				$Items=1;
				$query="Select * from data2";
				$user_result = mysqli_query($con,$query);
				while ($data = mysqli_fetch_assoc($user_result)) {
					# code...
				

				?>

				<tr>
					<td><?php echo $Items;?></td>
					<td><?php echo $data['Qouref']?></td>
					<td><?php echo $data['descriptions']?></td>
					<td><?php echo $data['qty']?></td>
					<td><?php echo $data['unitprice']?></td>
					<td><?php echo $data['netprice']?></td>
					<td class ='itotal'><?php echo $data['total']?></td>
					</tr>


				<?php $Items++;}?>
					



				</table>
				
			</div>
		</div>
	</div>
</body>
</html>