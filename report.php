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
                     
                     <li><a href="servicesd.php">Services</a></li>
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
			<a href="print_rep.php"><button onclick="myFunction()" class="col-md-offset-5 btn  btn-primary btn-ms"> print this report <span class="glyphicon glyphicon-file"></span></button></a>
			<!---print report code----->
<script>
function myFunction() {
    window.print();
}
</script>


			<!-------->
			</div>
       </div>
		 <div align="center">
            <div >

               <h1>Test For Your Mental Health</h1>
               <p></p>

               <div class=" s-12 m-4 l-2 center"><a class="white-btn" href="category.php">Take The Test Now</a></div>

            </div>
         </div>	
		 </section>
		 <div class="margin">
			   <center>
			      <div class="s-12 m-12 l-8 l-offset-2">
							  <form class="customform" method="post" >
							  <center><h3> Your Report is saved .The Stress Score is :<?php  echo $_SESSION['score'] ;?></h3></center>
							  <div class="progress " >
							<div class="progress-bar progress-bar-success progress-bar-striped" style="width: <?php echo $_SESSION['score']-17?>%">
    <?php 
	if($_SESSION['score']<33)
		echo  $_SESSION['score']."%"; 
	else
	   echo  (33)."%"; ?>
	<span class="sr-only"><?php  echo $_SESSION['score']-17;?>% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-danger progress-bar-striped" style="width:<?php echo (17)?>%">
    <?php if($_SESSION['score']>33)echo ($_SESSION['score']-33)."%"; ?>
	<span class="sr-only"><?php echo 17;?>% Complete (success)</span>
  </div>
</div>
							  <?php include("graph.php"); ?>
							<br><br>

							 <table class="table table-stripted">
							 <tr><th>Question ID</th><th>Question</th><th> Your Choice</th><tr>
							<?php 
							$y=1;
							$sql="select * from question where  tid=1 order by qid;";
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
			
			<div class="customform l-4 l-offset-4" ><button class="color-btn" type="submit" name="analysis">Further Test Analysis</button></div></form>	
			

			<?php 
			
			   if(isset($_POST["analysis"]))
			   {$_SESSION['treat']=array(8);
		   $_SESSION['treat1']=array(8);
						header("location:analysis.php");
			   }		
					?>
			
</form>   
</div>
</div>
   </body>
</html>		