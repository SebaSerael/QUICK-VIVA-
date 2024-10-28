<?php

$qid=$_REQUEST["qid"];
$subid=$_REQUEST["subid"];
$qn=$_REQUEST["qn"];
$opt1=$_REQUEST["opt1"];
$opt2=$_REQUEST["opt2"];
$opt3=$_REQUEST["opt3"];
$opt4=$_REQUEST["opt4"];
$ans=$_REQUEST["ans"];

$status="Added";
$conn = new mysqli("localhost", "root", "", "collegevivo");
$sql = "INSERT INTO questions(questionid, subjectid, question,opt1 ,opt2,opt3 ,opt4,ans,status)VALUES ('$qid', '$subid', '$qn','$opt1','$opt2','$opt3','$opt4','$ans','$status')";

$conn->query($sql);
$conn->close();

echo $sql;

header("Location:Teacherhome.php");
?>