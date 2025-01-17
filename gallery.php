<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Makeup Artist</title>
   
  <!-- Basic Meta Tags for SEO -->
  <meta name="description" content="Thilothana Makeup Artist - Professional and affordable makeup services for all occasions, ensuring satisfaction and customized beauty.">
  <meta name="keywords" content="makeup artist, bridal makeup, professional makeup, HD makeup, affordable makeup, celebrity makeup, party makeup, Thilothana">
  <meta name="author" content="Thilothana">
  <meta property="og:title" content="Thilothana Makeup Artist">
  <meta property="og:description" content="Professional and affordable makeup services for brides, celebrities, and everyday individuals looking to enhance their natural beauty.">
  <meta property="og:image" content="images/ads.jpg">
  <meta property="og:url" content="https://http://thilothanamakeupartist.in">
  <meta property="og:type" content="website">
      <link rel="icon" href="images/fav.png" type="images/fav.png">
      
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#gallery">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Book Now</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img id="logo" src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                     <ul class="email">
                        <li><a href="#">Call: (+91) 7695826978</a></li>
                        <li><a href="#">Email: thilothanamakeupartist05@gmail.com</a></li>
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->


s
     

      
      <!-- Gallery Section -->
<div id="gallery" class="gallery">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <br><br><br><br><br><br>
               <h2> <img src="images/head.png" alt="#"/> Our Gallery</h2>
               <p>Explore the stunning transformations and artistry in makeup created for our clients.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <?php
         $directory = 'images/gallery/';
         $images = glob($directory . "*.{jpg,JPG,jpeg,png,gif}", GLOB_BRACE);

         foreach ($images as $image) {
             echo '
             <div class="col-md-4">
                 <div class="gallery_box">
                     <img src="' . $image . '" alt="Gallery Image" class="img-fluid">
                 </div>
             </div>';
         }
         ?>
      </div>
   </div>
</div>






   </div>
</div>














<!-- Callback Request Section -->
<div id="contact" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2> <img src="images/head.h.png" alt="#"/>BOOK THE <span class="white">DAY NOW</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <form id="callbackRequest" class="main_form" method="POST" action="submit_form.php">
               <div class="row">
                  <div class="col-md-12">

                     <input class="contactus" placeholder="Name" type="text" name="name" required>
                  </div>
                   <div class="col-md-12">
                     <input class="contactus" placeholder="Phone Number" type="tel" name="phone" pattern="[0-9]{10}" required>
                  </div>
                  <div class="col-md-12">
                     <select class="contactus" name="category" required>
                        <option value="">Select Category</option>
                        <option value="Makeup">Puberty MakeUp</option>
                        <option value="Hair Styling">Maternity MakeUp</option>
                        <option value="Nail Art">Baby Shower MakeUp</option>
                        <option value="Nail Art">Bridal MakeUp</option>
                        <option value="Nail Art">Pro HD MakeUp</option>
                        <option value="Nail Art">Engagement MakeUp</option>
                        <option value="Nail Art">Nature MakeUp</option>
                        <option value="Nail Art">HD MakeUp</option>
                        <option value="Nail Art">Nature MakeUp</option>
                     </select>
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Address" type="text" name="address" required>
                  </div>
                  <div class="col-md-12">
                     <textarea class="textarea" placeholder="Description" name="description" required></textarea>
                  </div>
                 
                  <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <button class="send_btn" type="submit">Send</button>
                  </div>

               </div>
            </form>
         </div>

         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="432" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                     </div>
               </div>
        
      </div>
   </div>
</div>















      <!--  footer -->




<footer id="contact">
         <div class="footer">
            <div class="container">
            
               <div class="row">
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-7 padd_bottom">
                           <div class="heading3">
                              <a href="#"><img src="images/logo1.png" alt="#"/></a>
                              <p>Thilothana Makeup Artist, Affordable, professional makeup services for brides, celebrities, and events, ensuring satisfaction with customized looks that enhance natural beauty.</p>
                           </div>
                        </div>
                        <div class="col-md-5 padd_bottom padd_bott">
                           <div class="heading3">
                              <h3>Contact Us</h3>
                              <ul class="infometion">
                                 <li><a href="#">Phone : (+91) 7695826978</a></li>
                                 <li><a href="#">Email : thilothanamakeupartist05@gmail.com</a></li>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-6 offset-md-1 padd_bottom">
                           <div class="heading3">
                              <h3>Social Media</h3>
                              <ul class="infometion">


                                 <ul class="infometion">
                                 <li><a href="https://www.instagram.com/thilo__makeupartist?igsh=OGxuYXphMW81a3Zo">Instagram</a></li>
                                 <li><a href="https://wa.me/917695826978">Whatsapp</a></li>
                                                               
                              </div>
                        </div>
                        <div class="col-md-5">
                           <div class="heading3">
                              <h3>Address</h3>
                              <ul class="infometion">
                                 </ul>
                                 <li><a href="#">Eachianari , Pollachi road</a></li>
                                 <li><a href="#">Coimbatore</a></li>
                                 <li><a href="#">Tamil Nadu</a></li>
                                 
                              </ul>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2025 All Rights Reserved. <a href="https://html.design/"> Thilothana Makeup Artist</a></p>
                        <p>Powered By Emeralz</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
        

         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
     



       function showSuccessPopup() {
            const overlay = document.getElementById('popupOverlay');
            overlay.style.display = 'block';

            // Hide popup after 5 seconds
            setTimeout(() => {
                overlay.style.display = 'none';
            }, 10000);
        }

        // Check URL for success flag
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            showSuccessPopup();
            // Remove the success parameter from the URL
            window.history.replaceState(null, null, window.location.pathname);
        }


         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }



      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 







      <style type="text/css">
         
         /* Gallery Section Styles */
#gallery {
   padding: 50px 0;
   background-color: #f9f9f9;
}

#gallery .titlepage h2 {
   font-size: 36px;
   color: #333;
   text-align: center;
   margin-bottom: 10px;
}

#gallery .titlepage p {
   font-size: 16px;
   color: #777;
   text-align: center;
   margin-bottom: 30px;
}

.gallery_box {
   position: relative;
   overflow: hidden;
   margin-bottom: 30px;
}

.gallery_box img {
   width: 100%;
   height: auto;
   object-fit: cover;
   transition: transform 0.3s ease-in-out;
   cursor: pointer;
}

.gallery_box:hover img {
   transform: scale(1.1);
   z-index: 10;
   box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
}

.gallery_box .overlay {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background: rgba(0, 0, 0, 0.6);
   display: flex;
   justify-content: center;
   align-items: center;
   opacity: 0;
   transition: opacity 0.3s ease-in-out;
}

.gallery_box:hover .overlay {
   opacity: 1;
}

.gallery_box .overlay p {
   color: #fff;
   font-size: 18px;
   text-align: center;
}

.view_more {
   display: block;
   margin: 20px auto;
   text-align: center;
   background-color: #bc1939;
   color: #fff;
   padding: 10px 20px;
   font-size: 16px;
   text-decoration: none;
   border-radius: 5px;
   transition: background-color 0.3s ease-in-out;
}

.view_more:hover {
   background-color: #e5554f;
}

/* Responsive Design */
@media (max-width: 768px) {
   .gallery_box img {
      height: auto;
      object-fit: contain;
   }
   .gallery_box {
      margin-bottom: 20px;
   }
   .view_more {
      font-size: 14px;
      padding: 8px 16px;
   }
}

      </style>
   </body>
</html>

