<?php

$eid=$_REQUEST["eid"];
$subid=$_REQUEST["subid"];
$edate=$_REQUEST["edate"];
$etim=$_REQUEST["etim"];
$status="Declared";
$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO examdates(examid, subjectid, examdt,examtim ,status)VALUES ('$eid', '$subid', '$edate','$etim','$status')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:adminhome.php");
?>