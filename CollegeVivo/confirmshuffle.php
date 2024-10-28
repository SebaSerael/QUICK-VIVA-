<?php
$eid=$_REQUEST["eid"];

  $conn = new mysqli("localhost","root","","collegevivo");
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
	$h=$_REQUEST["h"];
$c=1;
		for($i=0;$i<$h;$i++)
			{
			 if(isset($_REQUEST["cc$i"]))
			 {
				$qid=$_REQUEST["cc$i"];
			
  			    $sqll = "INSERT INTO shuffledones(shuffleid,examid,questionid,subjid,status)VALUES ('SH$c','$eid', '$qid','$subid','New')";
				echo $sqll."<br />";
			    $conn->query($sqll);
				$c++;
			 }
		 }	
      $conn->close();
	  header("Location:Teacherhome.php");
?>