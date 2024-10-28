<?php
$eid=$_REQUEST["eid"];

$conn = new mysqli("localhost","root","","collegevivo");
  $sqll="truncate table admcardforvivo";
$conn->query($sqll);
  $sqll="truncate table result";
$conn->query($sqll);
  $sqll="truncate table shuffledones";
$conn->query($sqll);
$sqlt="select * from subject where subid=(select subjectid from examdates where examid='$eid')";
$rs=mysqli_query($conn,$sqlt);
$subid="";
$batc="";
while($row=mysqli_fetch_array($rs))
{
	$subid=$row[0];
	$batc=$row[2];
}
$rs->close();
$sql = "select * from Student where batchcode='$batc'";
echo $sql;

$rs=mysqli_query($conn,$sql);


while($row=mysqli_fetch_array($rs))
			{
			  $stid=$row[0];
			  $stname=$row[1];
			  $batcod=$row[2];
			  $gen=$row[3];
			  $corcod=$row[4];
			  $DOB=$row[5];
			  $age=$row[6];
			  $email=$row[7];
			  $phno=$row[8];
			  $stat=$row[9];			
			  $sqll = "INSERT INTO admcardforvivo(examid, subid, studid,batchcode ,coursecode)VALUES ('$eid', '$subid', '$stid','$batc','$corcod')";
			  echo $sqll;
			  $conn->query($sqll);

			}
header("Location:Teacherhome.php");
?>