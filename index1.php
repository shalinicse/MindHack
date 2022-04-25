
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

        
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>	  
                 
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
            <div class="line">
                <h2 class="section-title">Sign Up</h2>
                  <div class="margin">
                   <div class="s-12 m-12 l-6 hide-m hide-s margin-bottom right-align">
                    <img src="img/p2.jpg" alt="">
                  </div>
				  
                     <div class="s-12 m-12 l-6">
					 <h4 style="color:red">Please Confrim Your Password</h4>
                       <h3>Sign up form</h3>
                        <form class="customform"  method="post" enctype="multipart/form-data">
						 <div class="s-12"><input name="sid" placeholder="Your email ID(as user id)" title="Student id" type="email" required/></div>
                        <div class="s-12"><input name="name" placeholder="Enter your name" title="Your name" type="text" required /></div>
                          <div class="s-12"><input name="dob" placeholder="YYYY-MM-DD" title="Your DOB" type="text"required /></div>
						<div class="s-12"><input name="r1" type="radio" value="male" checked="checked" required/>Male</input>
                    <input name="r1" type="radio" value="female" required/>Female</input></div>
                          
                    <div class="s-12">Upload PHOTO</div>
					<div class="s-6 "><input class="color-btn" type="file" name="photo"/></input></div>
                
					
					<div class="s-12"><input name="college" placeholder="Enter Your Institute Name" title="Institute Namme" type="text" required/></div>
                 <div class="s-12"><input name="mob" placeholder="Enter Your Contact no" title="contact no"type="text" required /></div>
				<div class="s-12"><input name="pwd" placeholder="Enter password" title="password" type="password" required/></div>
				<div class="s-12"><input name="cpwd" placeholder="Confirm Password " title="confirmpassword" type="password" required /></div> 
                    <div class="s-12">Enter your book name in-case you forget password. </div>
				
				<div class="s-12"><input name="book" placeholder="Enter Book name" title="book" type="text" required/></div>
				<div class="s-12 m-12 l-4"><button  class="color-btn" type="submit" name="btninsert">Register</button></div>
          <?php
     if(isset($_POST["btninsert"]))
		{	
		 $name=$_POST['name'];
		 $dob=$_POST['dob'];
		 $sid=$_POST['sid'];
 		 $sex=$_POST['r1'];
		 $mob=$_POST['mob'];
		 $pwd=$_POST['pwd'];
		 $college=$_POST['college'];
		 $cpwd=$_POST['cpwd'];
		 $book=$_POST['book'];
		 
		 $file=$_FILES['photo'];
		 $pic_name=$file['name'];
		$type=$file['type'];
		$size=$file['size'];
		$tmppath=$file['tmp_name'];
		session_start();
		$_SESSION['picpath']=$tmppath;
		$_SESSION['picname']=$pic_name;
		
		if($_POST['pwd'] !== $_POST['cpwd']) 
	header("location:index1.php");
	    
		else
		{
			 include("config.php");
			if($pic_name!="")
			{	
			
				if(move_uploaded_file($tmppath,"img/".$pic_name))
				
				{
			
	    
						$sql="insert into student values('$name','$dob','$sex','$mob','$pwd','$college','$pic_name','$sid','$book')";
						mysql_query($sql);
						if(mysql_affected_rows()>0)
						header("location:success.html");
					
				}
				else
						echo"record not inserted";
			}
		}
	}		
	?>		 
		  </form>
              
			</div>
          </div>
        </div>		  
      </section>
	  
	   <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">

               <h1>Test For Your Mental Health</h1>
               <p></p>

               <div class="s-12 m-4 l-2 center"><a class="white-btn" href="signin.php">Take The Test Now</a></div>

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