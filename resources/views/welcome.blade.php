

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta Tags -->
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="author" content="themeholder">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Page Title -->
      <title>VISO - One Page Creative Agency Template </title>
      <!-- Favicon Icon -->
      <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
      <!-- Stylesheets -->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/fonts/flaticon.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <!-- Main Content site -->
      <div class="main-site">
         <!--preloader  -->
         <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
         </div>
         <!--/End preloader  -->
         <!-- Header Area Start-->
         <header class="sticky-header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2">
                     <div class="logo">
                        <a href="">
                        <img src="assets/img/logo.png" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="main-menu float-right">
                        <nav>
                           <ul>
                              
                              <li><a href="#" data-scroll-nav="0">Home</a></li>
                              <li><a href="#" data-scroll-nav="1">About</a></li>
                              <li><a href="#" data-scroll-nav="2">Features</a></li>
                              <li><a href="#" data-scroll-nav="3">Pricing</a></li>
                           </ul>
                        </nav>
                     </div>
                     <div id="mobile-menu"></div>
                  </div>
                  <div class="col-md-2">
                     <div class="call-button" style="margin-top: .8rem;">
                        <a href="#" data-scroll-nav="5"></i>Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- Header Area End!-->
         <!-- Start Hero  -->
         <div class="hero-area" data-scroll-index="0">
            <div class="single-hero">
               <div class="hero-wrapper" style="background-color: white;">
                  <div class="container">
                     <div class="row ">
                        <div class="col-md-6 col-sm-12">
                           <div class="hero-content" style=" margin-top: 190px;">
                              <h1>Great Marketing
                                With Tracking Extractor
                              </h1>
                              <p>Dropshippers can use our Tracking Number generator to get Valid and Unique Tracking info to any United States City and State.</p>
                              @if (Route::has('login'))
                              @auth
                              <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                              @else
                              <a class="viso-btn hero"  href="{{ route('login') }}">Login</a>
                              @if (Route::has('register'))
                              <a class="viso-btn two" href="{{ route('register') }}">register</a>
                             
                              @endif
                    @endauth
                           </div>
                           @endif
                        </div>
                           <div class="col-md-6 col-sm-12">
                              <video src="assets/img/video.mp4" autoplay loop width="650rem"></video>
                           </div>
                     </div>
                  </div>
                  <div class="hero-area-social">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- /End Hero  -->
         <!-- Work Progress -->
         <div class="work-area section-padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2 col-md-8">
                     <div class="section-title text-center">
                        <h2>Our Work Process</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- Single Work-->
                  <div class="col-md-4">
                     <div class="single-work">
                        <div class="work-icon">
                           <i class="flaticon-test"></i>
                        </div>
                        <h2>Research Design</h2>
                        <p>Lorem Seamless integration across all digital media channels with nced targeting full combined.</p>
                     </div>
                  </div>
                  <!-- Single Work-->
                  <!-- Single Work-->
                  <div class="col-md-4">
                     <div class="single-work">
                        <div class="work-icon two">
                           <i class="flaticon-plan"></i>
                        </div>
                        <h2>making wireframe</h2>
                        <p>Lorem Seamless integration across all digital media channels with nced targeting full combined.</p>
                     </div>
                  </div>
                  <!-- Single Work-->
                  <!-- Single Work-->
                  <div class="col-md-4">
                     <div class="single-work">
                        <div class="work-icon three">
                           <i class="flaticon-ux"></i>
                        </div>
                        <h2>Final UI Design</h2>
                        <p>Lorem Seamless integration across all digital media channels with nced targeting full combined.</p>
                     </div>
                  </div>
                  <!-- Single Work-->
               </div>
            </div>
         </div>
         <!-- /End Work Progress -->
         <!-- Discover Area -->
         <div class="discover-area section-padding"  data-scroll-index="1">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="discover-title">
                        <h3>We are here for Amazon Solution with 5+ years of experience
                        </h3>
                        <p>We have fostered the best following giving programming to selling on Amazon or some other Commercial center
                           All the following Numbers
                           <br> we give are special which eleminate the possibilities giving copy Following Numbers to your clients</p>
                     </div>
                     <div class="dicover-list">
                        <ul>
                           <li>
                              <i class="fa fa-check" aria-hidden="true"></i>
                              <p>We have developed the best tracking providing software for selling on Amazon. 
                              </p>
                           </li>
                           <li>
                              <i class="fa fa-check" aria-hidden="true"></i>
                              <p>Any other Marketplace All the tracking Numbers.With over 5 years of combined experience. 
                              </p>
                           </li>
                           <li>
                              <i class="fa fa-check" aria-hidden="true"></i>
                              <p>we provide are unique which eleminate the chances of providing duplicate Tracking Numbers to your .
                              </p>
                           </li>
                        </ul>
                        <a class="viso-btn discover" href="#">Get Started</a>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="discover-image">
                        <img src="assets/img/discover-right.png" alt="">
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
         <!-- /End Discover Area -->
         <!-- Service Area -->
         <div class="service-area section-padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2" data-scroll-index="2">
                     <div class="section-title text-center">
                        <h2>Discover Our Features</h2>
                        <h3>We Provide Awesome Service With Our Tools</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="active-service-carousl owl-carousel">
                     <!-- single service -->
                     <div class="single-service">
                        <img src="assets/img/service1.png" alt="">
                        <h2>Unique Tracking Numbers</h2>
                        <p>We are provide Unique tracking Numbers</p>
                     </div>
                     <!-- single service -->
                     <!-- single service -->
                     <div class="single-service">
                        <img src="assets/img/service2.png" alt="">
                        <h2>Maintain VTR above 95%</h2>
                        <p>Shipping/Delivery date of your Choice. <br>.</p>
                     </div>
                     <!-- single service -->
                     <!-- single service -->
                     <div class="single-service">
                        <img src="assets/img/service3.png" alt="">
                        <h2>Bulk Trackings in Minutes</h2>
                        <p>Just Upload Amazon Order Reports <br>.</p>
                     </div>
                     <!-- single service -->
                     <!-- single service -->
                     <div class="single-service">
                        <img src="assets/img/service1.png" alt="">
                        <h2>Updated Tracking Numbers Database</h2>
                        <p>Unlimited Tracking & Fast Results <br>.</p>
                     </div>
                     <!-- single service -->
                  </div>
               </div>
            </div>
         </div>
         <!-- /End Service Area -->
      
         <!-- Call To Action Area-->
         <div class="cta-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 text-center">
                     <div class="cta-text">
                        <h2>We are the only company that doesn't provide a tracking number twice</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /End Call To Action Area-->
         <!-- Tem Area -->
         <div class="team-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="section-title text-center">
                        <h2>Our Expert Team Member</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- single team -->
                  <div class="col-md-4">
                     <div class="single-team">
                        <img src="assets/img/team1.png" alt="">
                        <h2>Mark Parker</h2>
                        <p>founder</p>
                        <div class="tem-social">
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- single team -->
                  <!-- single team -->
                  <div class="col-md-4">
                     <div class="single-team">
                        <img src="assets/img/team2.png" alt="">
                        <h2>robert brown</h2>
                        <p>web designer</p>
                        <div class="tem-social">
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- single team -->
                  <!-- single team -->
                  <div class="col-md-4">
                     <div class="single-team">
                        <img src="assets/img/team3.png" alt="">
                        <h2>mustafa kamal</h2>
                        <p>XI/UX Designer</p>
                        <div class="tem-social">
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- single team -->
               </div>
            </div>
         </div>
         <!-- /End Team Area -->

         <!-- Pricing  Area -->
         <div class="pricing-area section-padding" data-scroll-index="3">
            <div class="container">
               <div class="row">
                  <div class="col-md-5 col-sm-12">
                     <div class="section-title effect text-left">
                        <h2>our pricing plan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididuntut.</p>
                     </div>
                  </div>
                  <div class="col-md-4 offset-md-3 col-sm-12">
                     <div class="price-swetch float-right m-t">
                        <ul class="nav" id="myTab" role="tablist">
                           <li>
                              <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">yearly</a>
                           </li>
                           <li>
                              <a class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">monthly</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab-content">
                     <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                           <!-- single table-->
                           <div class="col-md-4">
                              <div class="pricing-table m-t">
                                 <div class="price-img">
                                    <img src="assets/img/price-img1.png" alt="">
                                 </div>
                                 <div class="price-content">
                                    <h2>Basic Plan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mojak eiusmod tempor incididun.</p>
                                    <span class="rate basic">$10.00</span>
                                    <a class="viso-btn price" href="#">purchase now</a>
                                 </div>
                              </div>
                           </div>
                           <!-- /single table-->
                           <!-- single table-->
                           <div class="col-md-4">
                              <div class="pricing-table m-t">
                                 <div class="price-img">
                                    <img src="assets/img/price-img2.png" alt="">
                                 </div>
                                 <div class="price-content">
                                    <h2>standard Plan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mojak eiusmod tempor incididun.</p>
                                    <span class="rate advance">$15.00</span>
                                    <a class="viso-btn price" href="#">purchase now</a>
                                 </div>
                              </div>
                           </div>
                           <!-- /single table-->
                           <!-- single table-->
                           <div class="col-md-4">
                              <div class="pricing-table m-t">
                                 <div class="price-img">
                                    <img src="assets/img/price-img3.png" alt="">
                                 </div>
                                 <div class="price-content">
                                    <h2>premium Plan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mojak eiusmod tempor incididun.</p>
                                    <span class="rate pro">$20.00</span>
                                    <a class="viso-btn price" href="#">purchase now</a>
                                 </div>
                              </div>
                           </div>
                           <!-- /single table-->
                        </div>
                     </div>
                     <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                           <!-- single table-->
                           <div class="col-md-4">
                              <div class="pricing-table m-t">
                                 <div class="price-img">
                                    <img src="assets/img/price-img1.png" alt="">
                                 </div>
                                 <div class="price-content">
                                    <h2>Basic Plan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mojak eiusmod tempor incididun.</p>
                                    <span class="rate basic">$100.00</span>
                                    <a class="viso-btn price" href="#">purchase now</a>
                                 </div>
                              </div>
                           </div>
                           <!-- /single table-->
                           <!-- single table-->
                           <div class="col-md-4">
                              <div class="pricing-table m-t">
                                 <div class="price-img">
                                    <img src="assets/img/price-img2.png" alt="">
                                 </div>
                                 <div class="price-content">
                                    <h2>standard Plan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mojak eiusmod tempor incididun.</p>
                                    <span class="rate advance">$150.00</span>
                                    <a class="viso-btn price" href="#">purchase now</a>
                                 </div>
                              </div>
                           </div>
                           <!-- /single table-->
                           <!-- single table-->
                           <div class="col-md-4">
                              <div class="pricing-table m-t">
                                 <div class="price-img">
                                    <img src="assets/img/price-img3.png" alt="">
                                 </div>
                                 <div class="price-content">
                                    <h2>premium Plan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do mojak eiusmod tempor incididun.</p>
                                    <span class="rate pro">$200.00</span>
                                    <a class="viso-btn price" href="#">purchase now</a>
                                 </div>
                              </div>
                           </div>
                           <!-- /single table-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /End Pricing  Area -->
        
@include('contact')
         <!-- Contact Area -->
         <!-- /End Contact Area -->
         <!-- Footer Area -->
         <footer>
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="about-widget">
                           <h2 class="widget-title">About us</h2>
                           <p>Having researched a few other platforms, I have come to the conclusion that it would take me a lot to switch. This site gives me more tools than its competition and at a lower price. It is without wuestion a great value for what you get.</p>
                           <ul>
                              <li>
                                 <i class="fa fa-map-o"></i>
                                 <p>2750 Quadra Street Victoria, USA</p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope-o"></i>
                                 <p>info@example.com</p>
                              </li>
                              <li>
                                 <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                                 <p>+324-9442-515</p>
                              </li>
                           </ul>
                           <div class="footer-social">
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="widget-link">
                           <h2 class="widget-title">Essential Links</h2>
                           <ul class="widget-menu">
                              <li><a href="">Service</a></li>
                              <li><a href="">Strategic Planning</a></li>
                              <li><a href="">Audit & Assurance</a></li>
                              <li><a href="">Business Services</a></li>
                              <li><a href="">Sales & Trading</a></li>
                              <li><a href="">Pricing Plan</a></li>
                              <li><a href="">Our Features</a></li>
                           </ul>
                           <ul class="widget-menu two">
                              <li><a href="">Find a Job?</a></li>
                              <li><a href="">Looking Consultant?</a></li>
                              <li><a href="">Download Apps?</a></li>
                              <li><a href="">Create An Account?</a></li>
                              <li><a href="">Much More?</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="footer-logo">
                           <a href="#">
                           <img src="assets/img/footer-logo.png" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="copyright-text">
                           <p>Copyright  2019 Viso. All Rights Reserved</p>
                        </div>
                     </div>
                  </div>
                  <!-- Scroll To Top -->
                  <a href="#" class="scrollup"><i class="fa fa-angle-double-up"></i></a>
               </div>
            </div>
         </footer>
         <!-- /End Footer Area -->
      </div><!-- /End Main Site -->
      <!-- Js File-->
      <script src="assets/js/jquery.v3.4.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
      <script src="assets/js/scrollIt.min.js"></script>
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <script src="assets/js/map.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>

