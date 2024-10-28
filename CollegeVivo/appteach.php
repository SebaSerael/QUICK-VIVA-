<?php

$stid=$_REQUEST["tid"];
$password=$_REQUEST["pwd"];
$conn = new mysqli("localhost", "root", "", "collegeVivo");
$sql = "INSERT INTO logtab(logid, password, usertype )valUES ('$stid', '$password','Teacher')";

$conn->query($sql);

$sql = "update Teacher set status='Approved' where teacherid='$stid'";

$conn->query($sql);


$conn->close();

echo $sql;

header("Location:teachlistforapp.php");
?>