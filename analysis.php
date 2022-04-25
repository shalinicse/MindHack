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
                     <a href="http://www.facebook.com"><i class="icon-facebook_circle"></i></a> <a href="http://www.twitter.com"><i class="icon-twitter_circle"></i></a> <a href="http://www.googleplus.com"><i class="icon-google_plus_circle"></i></a> <a href="http://www.instagram.com"><i class="icon-instagram_circle"></i></a>
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
					<li><a href="feedback.php">Feedback</a></li>
                     <li><a href="servicesd.php">About Screening</a></li>
                     <li><a href="aboutusd.php">About Us</a></li>
					 <li><a href="logout.php">Log out</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
	  
	  <!--profile block-->
	  
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
         </div>	<br>
			
			 <nav>
            <div class="line">
               <div class="s-12 l-2">

                  <p class="logo"><strong>Services</strong></p>

               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                    <li><a href="healthyliving.php">Healthy Living Classes</a></li>
                     <li><a href="physicalliving.php">Physical Living Classes</a></li>
                     <li><a href="resilency.php">Resiliency Classes</a></li>
					 
                  </ul>
               </div>
            </div>
         </nav>
            
         <!-- FEATURES -->

         <!-- ABOUT US -->
         
        
         <!-- LATEST NEWS -->
          <div id="latest-news">
			
					  <form class="customform" action="" method="post">
							 <div class="col-md-8">
							 <h1 style="color:red" >
            Your Reports
			</h1>
			<br><br>			
			<div class="panel" style="color:green">
				<div class="panel-body ">Choice Analysis</div>
		 <table class="table table-stripted">
		<?php
		
	for($i=0;$i<8;$i++)	
	{
		
		$sqli="select yes,treat from report where tid='1' AND qid='$i'";
		$result=mysql_query($sqli);
		$row = mysql_fetch_array($result);?>
		<tr>
		<td><?php 
		if($_SESSION['value'][$i]=="yes")
		{
			$_SESSION['treat'][$i]=$row["treat"];
			$_SESSION['treat1'][$i]=$row["yes"];
			echo "Problem:".$i." :: ".$row["yes"]; 
		}
		?></td></tr>
		<?php
	}	
?>
</table>
</div> 
			<div class="customform l-4 l-offset-4" ><button class="color-btn" type="submit"  name="treat">Go for Treatments....:)</button></div>
<?php
	if(isset($_POST["treat"]))	
		header("location:treatment.php");
?>
</form> 
</div>
</div>
			
              <div class="margin">
                <div class="s-12 m-6 l-6">
					<?php
					
				?>
				</div>
			</div>          
        
        
          <!-- MAP -->
         <div >  	  
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254.43989011936358!2d81.8983539960474!3d25.341992172146952!2m3!1f0!2f39.443592!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x0%3A0x793f1644785681b1!2sUnited+College+of+Engineering+and+Management!5e1!3m2!1sen!2sin!4v1503742523540" width="1366" height="768" frameborder="0" style="border:0" allowfullscreen>
</iframe>
        </div>
      </section>
	  
      <!-- FOOTER -->
      
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>
   </body>
</html>