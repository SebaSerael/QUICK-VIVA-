<?php

$subid=$_REQUEST["subid"];
$subnam=$_REQUEST["subnam"];
$batc=$_REQUEST["batc"];
$syllb=$_REQUEST["syllb"];
$subtyp=$_REQUEST["subtyp"];
$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO subject(subid, subname, batch,syllubus,stype)VALUES ('$subid', '$subnam', '$batc','$syllb','$subtyp')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:Teacherhome.php");
?>