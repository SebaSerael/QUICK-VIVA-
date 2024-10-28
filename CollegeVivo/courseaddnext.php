<?php

$cid=$_REQUEST["cid"];
$cornam=$_REQUEST["cornam"];
$yra=$_REQUEST["yra"];
$status="Doing";
$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO course(coursecode, coursename, yearofadm,status)VALUES ('$cid', '$cornam', '$yra','$status')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:courbat.php");
?>