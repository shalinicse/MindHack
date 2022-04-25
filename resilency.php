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
	<!--about block-->	 
		   
            <div class="s-12 m-6 l-8 l-offset-2 media-container">
                 <img src="img/resilency.jpg" alt="">

            </div>
             <article class="s-12 m-12 l-8 l-offset-2">
               <h2>Resiliency Classes</h2>
				 
	       <p class="lead">
               Experience a variety of mind-body practices focused on opening awareness,
			   easing tension, and enhancing overall quality of life.
		  </p>
				 
<h4>Restorative Yoga:</h4>

  <p>Practice conscious relaxation through a few select yoga postures designed to calm,
     comfort and restore. This restful experience is customized for you using equipment 
	 such as pillows, cushions and yoga blocks. Easing into these supported postures 
	 fosters physical, mental and emotional restoration.&nbsp;<em>*No prior yoga 
	  experience required.</em></p>

<p>45 minutes - $10</p>

<h4>Gentle Yoga:</h4>

  <p>Experience a calming, gentle yoga session with our certified yoga instructors 
     to enhance stretching, ease tension and create space for relaxation and rejuvenation.
	 <em>*Prior yoga experience required.</em></p>

 <p>45 minutes - $10</p>

<h4>Prenatal Yoga:</h4>

<p>Discover how gentle yoga postures, breathing and relaxation techniques can relieve 
   the discomforts associated with pregnancy. All who are new to yoga and currently 
   practicing are welcome.&nbsp;<em>*No prior yoga experience required.</em></p>

<p>45 minutes - $10</p>

<h4>Introduction to Yoga:</h4>

  <p>Are you curious about yoga and always wanted to give it a try? This class is for you.
     Learn to consciously breathe, gently move, and focus your mind. 
	 <em>*No prior yoga experience required.</em></p>

<p>45 minutes - $10</p>

<h4>Relaxation Techniques:</h4>

  <p>Immerse yourself into a variety of relaxation modalities including; 
     stretching to release tension; breath-work to connect your mind, body,
	 and spirit; and progressive muscle relaxation to leave you feeling refreshed.
	 Relaxation techniques can assist you in staying present moment focused, cope 
	 with stressful situations and initiate a sense of calm that can help with a good 
	 night&rsquo;s sleep.<em>*No prior yoga experience required.</em></p>

<p>45 minutes - $10</p>

     <div class="about-us-icons">
        <i class="icon-paperplane_ico"></i> <i class="icon-trophy"></i> <i class="icon-clock"></i>
      </div>
    </article>
         
         
      
	  
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