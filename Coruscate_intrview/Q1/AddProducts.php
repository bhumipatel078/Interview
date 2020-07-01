<?php
	include_once("./connection.php");
//	$qry=mysqli_query($con,"select `Category_Type` from tbl_category");
//	 while($res=mysqli_fetch_array($qry)){
//											foreach($res as $val){
//												echo($val."</br>");
//												break;
//												}
//							}
	if(isset($_POST["btnaddProduct"])){
	$q1="INSERT INTO `tbl_products`( `Category_Name`, `product_Name`, `price`, `description`, `release_date`, `Quantity`) VALUES ('".$_POST["txtcategory"]."','".$_POST["txtname"]."','".$_POST["txtprice"]."','".$_POST["txtdescription"]."','".$_POST["txtdate"]."','".$_POST["txtqty"]."')";
	$r1=mysqli_query($con,$q1);
	if($r1==1){
		header("location:./displayData.php");
	}else{
		echo("Somthing Wrong!!")or die(mysqli_error($con));
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="392" height="234" border="1" align="center">
    <caption>
      Add Products...
    </caption>
    <tbody>
      <tr>
        <th width="137" scope="row">Category_Type</th>
        <td width="184"><select id="lst1" name="txtcategory" tabindex="281" size="1">

        <?php
			$qry=mysqli_query($con,"select `Category_Type` from tbl_category");
			while($res=mysqli_fetch_array($qry)){
											foreach($res as $val){
												  ?>
			<option><?php echo $val; ?></option>
												
												<?php
												break;
												}
							}
			?>
     		</select>
    	</td>
      </tr>
      <tr>
        <th scope="row">Product_Name</th>
        <td><input type="text" name="txtname" id="textfield"></td>
      </tr>
      <tr>
        <th scope="row">Price</th>
        <td><input type="number" name="txtprice" id="textfield2"></td>
      </tr>
      <tr>
        <th scope="row">Description</th>
        <td><textarea name="txtdescription" rows="5" cols="40"></textarea></td>
      </tr>
      <tr>
        <th scope="row">Release_Date</th>
        <td><input type="date" name="txtdate" id="date"></td>
      </tr>
      <tr>
        <th scope="row">Quantity</th>
        <td><input type="number" name="txtqty" id="textfield4"></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="btnaddProduct" id="submit" value="Submit"></th>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>

</body>
</html>