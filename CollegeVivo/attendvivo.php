<?php
session_start();
$lid=$_SESSION["lid"];
$_SESSION["tcnt"]=0;
$_SESSION["crtan"]=0;
$conn = new mysqli("localhost","root","","Collegevivo");
$sql = "select * from result where studid like '$lid'";
 $rs=mysqli_query($conn,$sql);
			if($row=mysqli_fetch_array($rs))
			{
				$eid=$row[0];
				$_SESSION["eid"]=$eid;
					$conn->close();
				header("location:alreadywritten.php");
			}
				
			header("Location:attendvivobeg.php");
?>