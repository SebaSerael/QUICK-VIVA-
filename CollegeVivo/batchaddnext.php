<?php

$bid=$_REQUEST["bid"];
$corid=$_REQUEST["batc"];
$sem=$_REQUEST["sem"];

$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO batch(batchid, courseid, runningsem)VALUES ('$bid', '$corid', '$sem')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:courbat.php");
?>