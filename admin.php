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
                     <li class="active-item"><a href="home.php">Home</a></li>

                     <li><a href="signin.php">Student Login</a></li> 
                     <li><a href="admin.php">Admin Login</a></li>                    					 
                     <li><a href="signup.php">Register</a></li>
                     <li><a href="services.php">About Screening</a></li>
                     <li><a href="aboutus.php">About Us</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
  
      <section>
	     
	  
	  <div class="line ">
              
               <div class="margin">
			   	
			   <center>
			   <h2>
            <br><br><br> <br>ADMIN LOGIN
        </h2>
	     <div class="s-12 m-12 l-5 media-container">
                 <img src="img/por7.jpg" alt="missing">

            </div>
            
			      <div class="s-12 m-12 l-offset-1 l-6">
				  
                    <form class="customform" method="post" action="">
                      <div class="l-12"><input name="admin_id" placeholder="Enter User Name" title="User name" type="text" required /></div>
                      <div class="l-12"><input name="admin_pwd" placeholder="Enter Password" title="Your Password" type="password" required /></div>
                      <div class="l-4"><button class="color-btn" name="submit" type="submit">Sign In</button></div>
                   <?php
				    if(isset($_POST["submit"]))
					{	
						$admin_id=$_POST['admin_id'];
						$admin_pwd=$_POST['admin_pwd'];
						session_start();
				 
						$_SESSION['$admin_id']=$admin_id;
				
					
				include("config.php");
				$sql="select name from admin where admin_id='$admin_id' and pwd='$admin_pwd';";
				$rs=mysql_query($sql);
				if($row=mysql_fetch_array($rs))
				header("location:admin2.php");
					}
			?>

				   </form>
                  </div> 
				 </center>
                </div>
			</div>
	    		
		 </section>
	  
	   <!-- FIRST BLOCK -->
        
        

         

         <!-- MAP -->
         <div > <br><br><br> 	  
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
			   <href="home.html" title="Responsee - lightweight responsive framework">About us<b>|</b>
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