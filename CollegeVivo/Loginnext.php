<?php
session_start();
$lgid=$_REQUEST["logid"];
$pwd=$_REQUEST["pwd"];


$conn = new mysqli("localhost", "root", "", "Collegevivo");
$sql = "select * from Logtab where logid='$lgid' and password='$pwd'";

$rs=$conn->query($sql);
if($row=mysqli_fetch_array($rs))
{ 
	$utyp=$row[2];
	$_SESSION["lid"]=$lgid;
	if($utyp=="Admin")
	{
		header("Location:adminhome.php");
	}
	else
		if($utyp=="Teacher")
		{
			header("Location:Teacherhome.php");
		}
		else
			if($utyp=="Student")
			{
				header("Location:studhome.php");
			}
			else
				if($utyp=="External")
				{
					header("Location:exthome.php");
				}
				else
				{
						header("Location:invaliduser.php");
				}
}
else
{	

   $conn->close();
header("Location:invaliduser.php");
}

?>