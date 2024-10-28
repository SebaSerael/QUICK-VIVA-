<?php
session_start();
$qid=$_REQUEST["qid"];
$opt=$_REQUEST["opt"];
$ans=$_REQUEST["ans"];

echo $opt;
echo $ans;
$lid=$_SESSION["lid"];
$tcnt=$_SESSION["tcnt"];
$tcnt++;
$crtan=$_SESSION["crtan"];
if($opt==$ans)
{
$crtan++;
}
echo "<br />".$crtan."<br/>".$tcnt;
$conn = new mysqli("localhost","root","","Collegevivo");
$sql = "update shuffledones set status='used' where questionid like '$qid'";
mysqli_query($conn,$sql);
if($tcnt=="5")
{
	$sql = "select * from result";
	$rs=mysqli_query($conn,$sql);
	$cnt=0;
	$cnt=mysqli_num_rows($rs)+$cnt;
	$eid=$_SESSION["eid"];
	$tm=1*$crtan;	
	$sql = "INSERT INTO result(resid,examid,studid,nqn,crtans,totmark,status)VALUES ('$cnt', '$eid', '$lid','$tcnt','$crtan','$tm','Started')";
	mysqli_query($conn,$sql);
	$conn->close();
	$_SESSION["tcnt"]=0;
	$_SESSION["crtan"]=0;
	header("Location:examover.php");
}
else
{
$_SESSION["tcnt"]=$tcnt;
$_SESSION["crtan"]=$crtan;
header("Location:attendvivobeg.php");
}
?>