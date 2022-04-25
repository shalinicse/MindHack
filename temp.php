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
   <body class="size-1140">
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
                     <li><a href="feedbackd.php">Feedback</a></li>
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
			<a href="admin_msg.php"><button class="btn  btn-success btn-ms"> inbox <span class="glyphicon glyphicon-comment"></span></button></a>
			<a href="user_msg.php"><button class=" btn  btn-info btn-ms"> sentbox <span class="glyphicon glyphicon-plane"></span></button></a>
			<a href="ther_msg.php"><button class=" btn  btn-warning btn-ms"> therapist <span class="glyphicon glyphicon-user"></span></button></a>
			<a href="motivation.php"><button class=" btn  btn-danger btn-ms"> motivation videos <span class="glyphicon glyphicon-facetime-video"></span></button></a>
			<a href="print_rep.php"><button class=" btn  btn-primary btn-ms"> print reports <span class="glyphicon glyphicon-file"></span></button></a>
			<a href="upd_info.php"><button class=" btn  btn-success btn-ms"> update profile <span class="glyphicon glyphicon-cog"></span></button></a>
			</div>
       </div>
		 <div align="center">
            <div >

               <h1>Test For Your Mental Health</h1>
               <p></p>

               <div class="s-12 m-4 l-2 center"><a class="white-btn" href="category.php">Take The Test Now</a></div>

            </div>
         </div>	
		 </section>
							  <form class="customform" method="post" >
							  <center><h3> Your Stress is :<?php  echo $_SESSION['score'] ;?></h3></center>
							  <?php include("graph.php"); ?>
							<br><br>
							  <div class="col-md-12" align="center"><h2><u>Report Review<u></h2></div>
							 <div class="col-md-8 col-md-offset-2">
							 <table class="table table-stripted">
							 <tr><th>Question ID</th><th>Question</th><th> Your Choice</th><tr>
							<?php 
							$y=1;
							$sql="select * from question where  tid=1;";
				$rs=mysql_query($sql);
				while($row=mysql_fetch_array($rs))
				{			
							
							?>
						
						<tr><td class="info"><?php echo $y;?></td>
						<td class="info"><?php echo $row["des"]; ?></td>
						<td class="info"><?php echo  $_SESSION['value'][$y-1]; ?></td>
						
				<?php
				$y++;}?>
</table>
			
			<div class="customform l-4 l-offset-4" ><button class="color-btn" type="submit" name="retest">Try Another Test</button></div></form>	
			

			<?php 
			
			   if(isset($_POST["retest"]))
					
						header("location:category.php");
							
					?>
			
</form>   
   </body>
</html>		