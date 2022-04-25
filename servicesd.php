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
		 <br>
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
		 
        
	   
            <br><br>     
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-12 l-12 margin-bottom">
                    
                     <h3>
            What is the purpose of the Mindhack Screen?
        </h3>
        <p>
            The online Mindhack Screen is a private, self-rated checklist for potential mood and anxiety symptoms. Your checklist responses trigger a risk assessment page indicating your relative risk for depression, an anxiety disorder, bipolar disorder and post-traumatic stress disorder (PTSD). The Screen responses and the resulting Mindhack risk assessment may be printed, faxed, emailed or securely accessed online by a designated health care professional, all at the discretion of the user. The information provided by the Mindhack expedites and organizes a discussion between doctor and patient of relevant mental health issues at their next office visit, helping to direct the physician toward a more accurate diagnosis. By providing parallel educational material for patients and their physicians the Mindhack encourages treatment compliance and long-range follow-up of progress.
        </p>
        <h3>
            Who benefits from completing the Mindhack online?
        </h3>
        <p>
            Anyone 18 years and older may complete the online Mindhack Screen. Patients will benefit by being directed toward a more accurate diagnosis and more appropriate treatment. Physicians benefit from the Mindhack because poorly treated mood and anxiety disorders impede compliance with medical treatments and adversely affect recovery from illness and physical health generally. Within the tight time constraints of a typical office visit, the Mindhack provides physicians with a highly effective tool for eliciting and organizing the mood and anxiety symptoms that may be interfering with their patients’ lives. </p>


       </span>
    </div>
</div>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-isight icon3x"></i>

                     <h2>Why Monitor Your Mood?</h2>

                     <p>A way to track how your treatment is going.

Once you have completed the Mindhack Screen and have discussed the results with your doctor, you may have agreed to begin psychotherapy and/or medication treatment. At this point we encourage you to record your progress with the Mindhack Monitor, a tracking form for assessing progress and potential side-effects over time. This monitoring system may be shared with the treating physician via hard copy, fax, email, or may be securely accessed through a Microsoft HealthVault account. </p>
                  </div>
                  <div class="s-12 m-6 l-3 l-offset-1 margin-bottom">
                     <i class="icon-star icon3x"></i>

                     <h2>What Can be Done?</h2></br>

                     <p>You and your physician may have begun a discussion about your mood and anxiety symptoms and their treatment. You should be aware that, for milder depression and for some anxiety conditions, certain types of talk psychotherapy may provide an alternative to medication. Furthermore, research has shown that combining medication with psychotherapy is often better than either treatment alone. .</p>
                  </div>
                  <div class="s-12 m-6 l-3 l-offset-1 margin-bottom">
                     <i class="icon-heart icon3x"></i>

                     <h2>Overview</h2></br>

                     <p> The Mindhack Score provides a single rating of general mental health

Based on their Mindhack responses each person is also assigned a single number, the Mindhack Score, which represents the likelihood that the symptoms disclosed reflect a clnically significant disorder. A University of North Carolina study of the Mindhack has shown that among patients with no diagnosis, 83% receive an an Mindhack Score below 33, whereas 81% of those with confirmed diagnoses fall above this threshold. The higher the Mindhack Score the more likely the patient's responses are clinically significant and the symptoms reported are having a real impact on quality of life..</p>
                  </div>
               </div>
            </div>
    
	 
	  <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">

               <h1>Test For Your Mental Health</h1>
               <p></p>



            </div>
         </div>
        
         
        
         <!-- LATEST NEWS -->
         <div id="latest-news">
            <div class="line">
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
                      <p><i><a href="https://www.whatsmym3.com">Whats My Mindhack</a></i></p>
                      <p><i><a href="https://www.mayoclinic.org">Mayo Clinic</a></i></p>
                      <p><i><a href="https://www.psychologytoday.com">Psychology Today</a></i></p>
                    </div>
                  </div>   
                </div>  
              </div>
            </div>
         </div>          
        
        
         <!-- MAP -->
         <div id="map-block">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247814.3661917313!2d16.569872019090596!3d48.23131953825178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka!5e0!3m2!1ssk!2ssk!4v1440344568394" width="100%" height="450" frameborder="0" style="border:0"></iframe>
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
                     <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Mind Hackers</a>
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