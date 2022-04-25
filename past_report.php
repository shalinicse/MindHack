<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Mental health information system</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
                 
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
     <body class="size-1140" style=" background-color:rgba(244, 67, 54, 0.7) ;">

      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">

                   <p><strong><h4 style="color:yellow">Mental Health Information System</h4></strong></p>

               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
<div class="right">
<img src="img/images1.jpg"/></div>
</div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li class="active-item"><a href="homed.php">Home</a></li>

                     
                     <li><a href="servicesd.php">About Screening</a></li>
					
                     <li><a href="aboutusd.php">About Us</a></li>
                     <li><a href="feedback.php">Feedback</a></li>
					<li><a href="logout.php">Log out</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
	   <!-- profile BLOCK -->
         
       <div class="line">
               <h2 class="section-title">Profile</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                     <?php
				 session_start();
				 if($_SESSION["usrname"] == null)
							header("location:index.html");
				$name=$_SESSION['usrname'];
				$sid=$_SESSION['usrid'];
				
				include("config.php");
				$sql="select * from student where sid='$sid';";
				$rs=mysql_query($sql);
				$row=mysql_fetch_array($rs);
					?>
				<img class="col-md-5" src="img/profile/<?php echo ($row['profile_pic']);?>"   />
				<h3><?php echo $name;?></h3>
			</div>
				</br>
			<button onclick="myFunction()" class="col-md-offset-5 btn  btn-primary btn-ms"> print reports <span class="glyphicon glyphicon-file"></span></button>
			<!---print report code----->
<script>
function myFunction() {
    window.print();
}
</script>


			<!-------->
			</div>
       </div>
		 
               <div class="margin">
			   <center>
			      <div class="s-12 m-12 l-8 l-offset-2">
				  
                    <form class="customform" action="" method="post">
                     
					 <?php
					 $testid=$_SESSION['tid'];
					 $rs=mysql_query("select * from result where test_id='$testid' and sid='$sid'");
	if(mysql_num_rows($rs)>0)
	{
	$row=mysql_fetch_array($rs);
	?>
					 
					 <h2 style="color:red">Your Report for test id   <?php echo $testid; ?></h2>
					 
<hr>
<h2 style="color:#01b1d7"> Stress Score is :<?php echo $row["test_score"];?></h2>	 
<div class="progress" >
				<div class="progress-bar progress-bar-success progress-bar-striped" style="width: <?php echo $row['test_score']-17?>%">
    <?php 
	if($row['test_score']<33)
		echo  $row['test_score']."%"; 
	else
	   echo  (33)."%"; 
   ?>
	<span class="sr-only"><?php echo $row["test_score"]-17;?>% Complete (success)</span>
  </div>
  
  <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?php echo (17)?>%">
    <?php if($row['test_score']>33)echo ($row['test_score']-33)."%"; ?>
	<span class="sr-only"><?php echo 17;?>% Complete (success)</span>
  </div>
</div>


<?php 
$_SESSION['x']=$row["test_score"];
include("graph1.php");
	}
	else
		echo "Test id incorrect......!!!";
 ?>

	 <table class="table table-stripted">
							 <tr><th>Question ID</th><th>Question</th><th> Your Choice</th><tr>
							<?php
						//view created for user current report	
						$sql="CREATE VIEW Current_report AS
								SELECT *
								FROM result RIGHT JOIN question
							ON t_cat = tid;";
						$rs=mysql_query($sql);
						
						//------------------
						
						$sql="select one,des from Current_report where test_id='$testid' and t_cat=tid and qid=0;";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						
						?>
						<tr><td class="info"><?php echo 1;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["one"]; ?></td>
						</tr>
						
						<?php 
						
						$sql="select two,qid,des from Current_report where test_id='$testid' and t_cat=tid and qid=1;";
						$rs=mysql_query($sql)or die($myQuery."<br/><br/>".mysql_error());;
						$row=mysql_fetch_array($rs);
						?>
						<tr><td class="info"><?php echo 2;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["two"]; ?></td>
						</tr>
						<?php 
						
						$sql="select three,qid,des from Current_report where test_id='$testid' and t_cat=tid and qid=2;";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						?>
						<tr><td class="info"><?php echo 3;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["three"]; ?></td>
						</tr>
						<?php 
						
						$sql="select four,qid,des from Current_report where test_id='$testid' and t_cat=tid and qid=3;";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						?>
						<tr><td class="info"><?php echo 4;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["four"]; ?></td>
						</tr>
						<?php 
						
						$sql="select five,qid,des from Current_report where test_id='$testid' and t_cat=tid and qid=4;";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						?>
						<tr><td class="info"><?php echo 5;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["five"]; ?></td>
						</tr>
						<?php 
						
						$sql="select six,qid,des from Current_report where test_id='$testid' and t_cat=tid and qid=5;";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						?>
						<tr><td class="info"><?php echo 6;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["six"]; ?></td>
						</tr>
						<?php 
						
						$sql="select seven,qid,des from Current_report where test_id='$testid' and t_cat=tid and qid=6;";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						?>
						<tr><td class="info"><?php echo 7;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["seven"]; ?></td>
						</tr>
						<?php 
						
						$sql="select eight,qid,des from Current_report where test_id='$testid' and t_cat=tid and qid=7;";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						?>
						<tr><td class="info"><?php echo 8;?></td>
						<td class="info"><?php  echo $row["des"]; ?></td>
						<td class="info"><?php echo  $row["eight"]; ?></td>
						</tr>
						<?php 
						$sql="DROP VIEW Current_report;";
						$rs=mysql_query($sql);?>
</table>
				   </form>
                  </div> 
				 </center>
                </div>
			
	    		
		 </section>
