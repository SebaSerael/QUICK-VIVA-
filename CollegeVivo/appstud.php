<?php

$stid=$_REQUEST["stid"];
$password=$_REQUEST["pwd"];
$conn = new mysqli("localhost", "root", "", "collegeVivo");
$sql = "INSERT INTO logtab(logid, password, usertype )valUES ('$stid', '$password','Student')";

$conn->query($sql);

$sql = "update STudent set status='Approved' where studentid='$stid'";

$conn->query($sql);


$conn->close();

echo $sql;

header("Location:studlistforapp.php");
?>