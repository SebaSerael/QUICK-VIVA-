<?php

$tid=$_REQUEST["tid"];
$tname=$_REQUEST["tname"];
$qual=$_REQUEST["qual"];
$gen=$_REQUEST["gen"];
$doj=$_REQUEST["doj"];
$desig=$_REQUEST["desig"];


$phno=$_REQUEST["phno"];
$email=$_REQUEST["email"];
//$age=$_REQUEST["age"];
$address=$_REQUEST["address"];
$status="NewReg";
$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO Teacher(teacherid, tname, qualification,gender ,doj,desig ,phone,email,address,status)VALUES ('$tid', '$tname', '$qual','$gen','$doj','$desig','$phno','$email','$address','$status')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:Registered.html");
?>