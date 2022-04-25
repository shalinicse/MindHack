

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
				</div>
		<form class="customform" action="" method="post">
			<div class="col-md-12">
			<h1>Your Reports</h1>
				<table class="table table-stripted">
			
<?php
$rs=mysql_query("select * from result where sid='$sid'");
	if(($row=mysql_num_rows($rs))==0)
	{
		
			echo "Your Report is Not Available";
	}
	else 
	{
	while($row=mysql_fetch_array($rs))
	{
		?>
		
		<tr class="danger"><td>Test id</td><td>Test Score</td><td>Test date</td><td>Q 1.</td><td>Q 2.</td><td>Q 3.</td><td>Q 4.</td><td>Q 5.</td><td>Q 6.</td><td>Q 7.</td><td>Q 8.</td><td>Student Id</td></tr>
        <tr class="success">
        	<td><?php echo $row["test_id"]; ?></td>
			<td><?php echo $row["test_score"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td><?php echo $row["one"]; ?></td>
            <td><?php echo $row["two"]; ?></td>
			<td><?php echo $row["three"]; ?></td>
			
			<td><?php echo $row["four"]; ?></td>
            <td><?php echo $row["five"]; ?></td>
            <td><?php echo $row["six"]; ?></td>
            <td><?php echo $row["seven"]; ?></td>
			<td><?php echo $row["eight"]; ?></td>
			
			
            <td><?php echo $row["sid"]; ?></td>
            
            
            
        </tr>
        <?php	
	}
		
	}	
?>
</table> 
<h4>Enter Test id for Printing that particular Report</h4>
<div class="s-12"><input name="tid" placeholder="test id"type="text"  /></div>

 <div class="s-12 m-12 l-offset-4 l-3"><button class="color-btn" name="graph1" type="submit">Print Preview</button></div>
<?php
 if(isset($_POST['graph1']))
 {
	 $_SESSION['tid']=$_POST['tid'];
		header("location:past_report.php"); }
?> 
</form> 
</div>
</div>
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
			
              <h2 class="section-title">Latest News</h2> 
              <div class="margin">
                <div class="s-12 m-6 l-6">
                  <div class="s-12 l-2">
                    <div class="news-date">
                      <p class="day">28</p><p class="month">AUGUST</p><p class="year">2016</p>
                    </div>
                  </div>
                  <div class="s-12 l-10">
                    <div class="news-text">
                      <a href="news.html"><h4>Latest News</h4></a>
                       <p>
                 <b>
Annals of Family Medicine 8:160-169 (2010)
</b>
<p><i>
<font color="#2f497e">
Feasibility and Diagnostic Validity of the M-3 Checklist: A Brief, Self-Rated Screen for Depressive, Bipolar, ....
</p></i></font color = blue>
</br>
                    </div>
                  </div>   
                </div> 
                <div class="s-12 m-6 l-6">
                  <div class="s-12 l-2">
                    <div class="news-date">
                      <p class="day">12</p><p class="month">JULY</p><p class="year">2016</p>
                      
                    </div>
                  </div>
                  <div class="s-12 l-10">
                    <div class="news-text">
                      <h4>Links</h4>
                      <p><i><a href="https://www.whatsmym3.com">Whats My M3</a></i></p>
                      <p><i><a href="https://www.mayoclinic.org">Mayo Clinic</a></i></p>
                      <p><i><a href="https://www.psychologytoday.com">Psychology Today</a></i></p>
                    </div>
                  </div>   
                </div>  
              </div>
            </div>
         </div>          
        
        
         <!-- MAP -->
         <div >  	  
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254.43989011936358!2d81.8983539960474!3d25.341992172146952!2m3!1f0!2f39.443592!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x0%3A0x793f1644785681b1!2sUnited+College+of+Engineering+and+Management!5e1!3m2!1sen!2sin!4v1503742523540" width="1366" height="768" frameborder="0" style="border:0" allowfullscreen>
</iframe>
        </div>
      </section>
	  
      <!-- FOOTER -->
      <footer>
         <div class="line">
		 
		 <div class="s-12 l-6">

               <a class="left" href="contact.html" title="Responsee - lightweight responsive framework">Send comment
			   <b>|</b>
			   <href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Terms Of Use<b>|</b>
			   <href="aboutus.html" title="Responsee - lightweight responsive framework">About us<b>|</b>
			   <href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Privacy Policy</a>
			   </div>
            <div class="s-12 l-6">

               <p>Copyright@2017,Project Team</p>
               
            </div>
            <div class="s-12 l-6">

               <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br>by Mind Hackers</a>

            </div>
         </div>
      </footer>
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
