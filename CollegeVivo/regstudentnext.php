<?php

$stid=$_REQUEST["stid"];
$stname=$_REQUEST["stname"];
$batcode=$_REQUEST["batc"];
$gend=$_REQUEST["gend"];
$corcode=$_REQUEST["corcode"];
$dob=$_REQUEST["dob"];
$age=$_REQUEST["Age"];
$email=$_REQUEST["email"];
$phno=$_REQUEST["phno"];
$status="NewReg";
$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO student(studentid, studentname,batchcode,gender,coursecode,dob,age ,email,phone,status)VALUES ('$stid', '$stname', '$batcode','$gend','$corcode','$dob','$age','$email','$phno','$status')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:Registered.html");
?>