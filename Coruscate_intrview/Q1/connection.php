<?php
	$con=mysqli_connect("localhost","root","","coruscate_interview");
	if($con){
//		echo("Connected Sucessfully!!");
	}else{
		echo("Somthing Wrong!!")or die(mysqli_error($con));
	}

?>