<?php

$tid=$_REQUEST["tid"];
$subid=$_REQUEST["subid"];
$cid=$_REQUEST["cid"];
$bid=$_REQUEST["bid"];
$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO teachersub(TeacherId,SubjectId,CourseCode,batchid)VALUES ('$tid', '$subid', '$cid','$bid')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:adminhome.php");
?>