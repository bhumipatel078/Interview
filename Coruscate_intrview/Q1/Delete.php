<?php
	include_once("./connection.php");
 $id = $_GET['id'];
		 echo($id);
if( isset($_GET['action'])) {
	 if($_GET['action']=='del'){

		 $qry="DELETE FROM `tbl_products` WHERE product_id=$id";
		 $res=mysqli_query($con,$qry);
		 if($res==1){
			 echo("deleted Sucessfully!!");
		 }else{
			 echo("Somthing Wrong!");
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
</body>
</html>