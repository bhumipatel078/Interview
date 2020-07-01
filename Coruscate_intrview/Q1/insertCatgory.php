<?php
	include_once("./connection.php");
	if(isset($_POST["btnaddCategory"])){
		$qry="INSERT INTO `tbl_category`(`Category_Type`) VALUES ('".$_POST["txtcategory"]."')";
		$res=mysqli_query($con,$qry);
		if($res==1){
			echo '<script>alert("Category Added Sucessfully!!")</script>';
		}else{
			echo("Something Wrong!!")or die(mysqli_error($con));
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Category</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="297" border="1" align="center">
    <caption>
      Insert Category Here...
    </caption>
    <tbody>
      <tr>
        <th width="172" scope="row">Category_Type</th>
        <td width="109"><select name="txtcategory">
        				<option>Fruits</option>
        				<option>Vegetables</option>
        				<option>Flowers</option>
        				<option>Elecronics</option>		
        				</select></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="btnaddCategory" id="submit" value="Submit">
			<a href="AddProducts.php">AddProducts</a></th>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
