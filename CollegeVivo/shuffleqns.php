<?php
session_start();

$lid=$_SESSION["lid"];
$conn = new mysqli("localhost","root","","collegevivo");
$sqlt="select examid from admcardforvivo";
$rs=mysqli_query($conn,$sqlt);
$eid="";
if($row=mysqli_fetch_array($rs))
{
	$eid=$row[0];
}
//echo $eid;
if($eid=="")
{
	$conn->close();
	header("Location:Noadmcardgen.php");
}
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
$sql = "select * from Questions where subjectid='$subid'";



?>



<!DOCTYPE html>

<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Viva Voce</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
             QUICK VIVA
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav  ">
              <li class="nav-item ">
              </li>
              <li class="nav-item">
                <a class="nav-link" href="selexam.php">Shuffle & Choose Qns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createadmitcard.php"> Create Admit Card</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="Qns.php"> Add Questions</a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="subadd.php"> Add Subject</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php"> <i class="fa fa-user" aria-hidden="true"></i> Logout</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="why_container">
        <div class="box">
          <div class="detail-box">
            <h5>
           Shuffle Questions
            </h5>
		    <form id="frm" method="post" action="confirmshuffle.php">
           <table width=1000 border=4>
		   <tr>
		   <th>Tick& Choose</th>
		   <th>QnId </th>
		   <th>Question</th>
		   <th>OPt1</th>
		   <th>Opt2 </th>
		   <th>Opt3</th>
		   <th>Opt4</th>
		   <th>Ans</th>
		  
		   </tr>
		   <?php
			$i=0;
			$rs=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($rs))
			{
			  $qid=$row[0];
			  $subid=$row[1];
			  $qn=$row[2];
			  $opt1=$row[3];
			  $opt2=$row[4];
			  $opt3=$row[5];
			  $opt4=$row[6];
			  $ans=$row[7];
		
			  
			  


?> 
		
		    <tr>
			<th><input type=checkbox name=cc<?php echo $i;?> value="<?php echo $qid; ?>">
		    <th><?php echo $qid; ?></th>			
		   <th><?php echo $qn; ?></th>		   
		   <th><?php echo $opt1; ?></th>
		   <th><?php echo $opt2; ?></th>
		   <th><?php echo $opt3; ?></th>
		   <th><?php echo $opt4; ?></th>
		   <th><?php echo $ans; ?></th>
		   </tr>
		   
		   <?php 
		   $i=$i+1;
			}
		   $conn->close();


		   ?>
		    
		   </table>
		   <input type=hidden name=h value="<?php echo $i; ?>">
		   <input type=hidden name=eid value="<?php echo $eid; ?>">
		   <input type="Submit" name="sb" value="Submit">
		   </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address 
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  College of Engineering Poonjar
				  Poonjar,Kottayam D.t
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Office: +91 9188405172
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  cepoonjar.ihrd@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Mission
            </h4>
            <p>
              To provide education and training of consistently high standards through innovative and versatile programmes that are beneficial to the current and emerging needs of the society.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="team.html">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Poonjar ENgg COllege</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>