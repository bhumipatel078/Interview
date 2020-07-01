<?php
include_once("./connection.php");
 $id = $_GET['id'];
		 echo($id);
$query = "SELECT * FROM `tbl_products` WHERE product_id='".$id."'"; 
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

 if( isset($_GET['action'])) {
	 if($_GET['action']=='edit'){
        
		 if(isset($_POST["btneditProduct"]))
		 {
			 echo("hello");
		$query="UPDATE `tbl_products` SET `Category_Name`='".$_POST["txtcategory"]."',`product_Name`='".$_POST["txtname"]."',`price`='".$_POST["txtprice"]."',`description`='".$_POST["txtdescription"]."',`release_date`='".$_POST["txtdate"]."',`Quantity`='".$_POST["txtqty"]."' WHERE product_id='".$id."'";

       $num=mysqli_query($con,$query);
		 if($num==1){
			 echo "Updated Sucessfully!!";
		 }else{
			 echo "Somthing Wrong!!" or die(mysqli_error($con));
		 }
    }
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
      Edit Products...
    </caption>
    <tbody>
      <tr>
        <th width="137" scope="row">Category_Type</th>
        <td width="184"><select id="lst1" name="txtcategory" tabindex="281" size="1">
         <option value=<?php if($row["Category_Name"]=="Fruits"){ echo 'selected';}?>>Fruits</option>
       <option value=<?php if($row["Category_Name"]=="Vegetables"){ echo 'selected';}?>>Vegetables</option>
           <option value=<?php if($row["Category_Name"]=="Elecronics"){ echo 'selected';}?>>Elecronics</option>
          </select>
    	</td>
      </tr>
      <tr>
        <th scope="row">Product_Name</th>
        <td><input type="text" name="txtname" id="textfield" value="<?php echo $row["product_Name"];?>"></td>
      </tr>
      <tr>
        <th scope="row">Price</th>
        <td><input type="number" name="txtprice" id="textfield2" value="<?php echo $row["price"];?>"></td>
      </tr>
      <tr>
        <th scope="row">Description</th>
        <td><textarea name="txtdescription" rows="5" cols="40" value="<?php echo $row["description"];?>"></textarea></td>
      </tr>
      <tr>
        <th scope="row">Release_Date</th>
        <td><input type="date" name="txtdate" id="date" value="<?php echo $row["release_date"];?>"></td>
      </tr>
      <tr>
        <th scope="row">Quantity</th>
       <td><input type="number" name="txtqty" id="textfield4" value="<?php echo $row["Quantity"];?>"></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="btneditProduct" id="submit" value="EditProduct"></th>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>