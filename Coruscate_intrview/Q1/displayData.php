<?php
		include_once("./connection.php");
		$qry="SELECT * FROM `tbl_products`";
		$res=mysqli_query($con,$qry);
		$count=1;	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post">
	<table border="1">
		<tr>
			<th>Sr.No</th>
			<th>Category_Name</th>
			<th>product_Name</th>
			<th>price</th>
			<th>description</th>
			<th>release_date</th>
			<th>Quantity</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
		<?php
		while($r=mysqli_fetch_array($res)){
		?>
		<tr>
			<td><?php echo $r[0]; ?></td>
			<td><?php echo $r[1]; ?></td>
			<td><?php echo $r[2]; ?></td>
			<td><?php echo $r[3]; ?></td>
			<td><?php echo $r[4]; ?></td>
			<td><?php echo $r[5]; ?></td>
			<td><?php echo $r[6]; ?></td>
			<td><a href="EditProduct.php?action=edit & id=<?php echo($r['product_id']); ?>">Update</td>
			<td><a href="Delete.php?action=del & id=<?php echo($r['product_id']); ?>">Delete</td>
		</tr>
		<?php
			$count++;
			}
			?>
	</table>
</form>
</body>
</html>